<?php

namespace App\Http\Controllers;

use App\Models\AssessPatientRisk;
use App\Models\FamilyAssessments;
use App\Models\FamilyTreeAndHouseMap;
use App\Models\FindingFacts;
use App\Models\GeneralInformation;
use App\Models\MonitorAndEvaluate;
use App\Models\Problem;
use App\Models\SocialInformations;
use App\Models\SocialSupport;
use App\Models\TerminationOfService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class AddInformationController extends Controller
{
    //
    public function index(Request $request)
    {
        $entries = $request->input('entries', 10);
        $query = $request->input('query');

        $general_information = GeneralInformation::when($query, function ($q) use ($query) {
            $q->where('id', 'like', '%' . $query . '%') // ค้นหาใน id
                ->orWhere('full_name', 'like', '%' . $query . '%')
                ->orWhere('hn', 'like', '%' . $query . '%')
                ->orWhere('id_card_num', 'like', '%' . $query . '%')
                ->orWhere('target_group', 'like', '%' . $query . '%');
        })->paginate($entries);
        // dd($general_informations);
        return view('admin.general_information.index', compact('general_information', 'entries', 'query'));
    }
    public function create()
    {
        $general_information = GeneralInformation::all();
        $finding_facts = FindingFacts::all();
        $social_informations = SocialInformations::all();
        $problem = Problem::all();
        $assess_patient_risk = AssessPatientRisk::all();
        $social_support = SocialSupport::all();
        $monitor_and_evaluate = MonitorAndEvaluate::all();
        $termination_of_service = TerminationOfService::all();
        $family_assessments = FamilyAssessments::all();
        $family_tree_and_house_map = FamilyTreeAndHouseMap::all();
        return view('admin.general_information.create', compact([
            'general_information',
            'finding_facts',
            'social_informations',
            'problem',
            'assess_patient_risk',
            'social_support',
            'monitor_and_evaluate',
            'termination_of_service',
            'family_assessments',
            'family_tree_and_house_map'
        ]));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->all(), $request->file('family_tree'), $request->file('house_map'));
        $validator = Validator::make($request->all(), [
            // table general_information
            'case_date' => 'required',
            'hn' => 'required',
            'an' => 'required',
            'sn' => 'required',
            'prefix' => 'required',
            'full_name' => 'required',
            'id_card_num' => 'required',
            'birth_date' => 'required',
            'age' => 'required',
            'nationality' => 'required',
            'ethnicity' => 'required',
            'education' => 'required',
            'religion' => 'required',
            'marital_status' => 'required',
            'healthcare_rights' => 'required',
            'occupation' => 'required',
            'phone_num' => 'required',
            'current_address' => 'required',
            'target_group' => 'required',
            // table finding_facts
            'receive' => 'required',
            'receive_detail' => 'nullable',
            'admit_date' => 'nullable',
            'facts_target_group' => 'required',
            'facts_target_group_detail' => 'nullable',
            'medical_expenses' => 'required',
            'can_pay' => 'required',
            'helping_pay' => 'required',
            'informant' => 'required',
            'other_name' => 'nullable',
            'relation' => 'nullable',
            'address_informant' => 'required',
            'informant_phone_num' => 'nullable',
            'income' => 'required',
            'source_of_income' => 'required',
            'source_of_income_detail' => 'nullable',
            'having_debt' => 'required',
            'total_debt' => 'nullable',
            'source_of_debt' => 'nullable',
            // table social informations
            'social_information' => 'required|array',
            'conditions_of_problems_found' => 'required',
            'help_planning' => 'required',
            // table problem
            'problem_detail' => 'required|array',
            // table assess_patient_risk
            'risk' => 'required|array',
            'risk_detail' => 'nullable|array',
            // table social_support
            'social_detail' => 'required',
            // table monitor_and_evaluate
            'monitor_and_evaluate_detail' => 'required',
            //table termination_of_service
            'cause' => 'required',
            'cause_detail' => 'nullable',
            //table family_assessments
            'result' => 'required',
            'total_score' => 'nullable',
            //table family_tree_and_house_map
            'family_tree.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'house_map.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            // Step 1: Create General Information
            $general_information = GeneralInformation::create($request->only([
                'case_date',
                'hn',
                'an',
                'sn',
                'prefix',
                'full_name',
                'id_card_num',
                'birth_date',
                'age',
                'nationality',
                'ethnicity',
                'education',
                'religion',
                'marital_status',
                'healthcare_rights',
                'occupation',
                'phone_num',
                'current_address',
                'target_group',
            ]));

            // Step 2: Create related tables
            $finding_facts_data = $request->only([
                'receive',
                'receive_detail',
                'admit_date',
                'facts_target_group',
                'facts_target_group_detail',
                'medical_expenses',
                'can_pay',
                'helping_pay',
                'informant',
                'other_name',
                'relation',
                'address_informant',
                'informant_phone_num',
                'income',
                'source_of_income',
                'source_of_income_detail',
                'having_debt',
                'total_debt',
                'source_of_debt',
            ]);

            // เพิ่มค่าเริ่มต้นให้กับ facts_target_group_detail
            $finding_facts_data['facts_target_group_detail'] = $request->input('facts_target_group_detail', ''); // กำหนดค่าเริ่มต้นเป็น string ว่าง

            $finding_facts = FindingFacts::create(array_merge(
                $finding_facts_data,
                ['general_information_id' => $general_information->id]
            ));

            $social_informations = SocialInformations::create([
                'social_information' => json_encode($request->input('social_information', []), JSON_UNESCAPED_UNICODE), // แปลงเป็น JSON
                'conditions_of_problems_found' => $request->input('conditions_of_problems_found', ''),
                'help_planning' => $request->input('help_planning', ''),
                'general_information_id' => $general_information->id,
            ]);
            $problem = Problem::create(array_merge(
                [
                    'problem_detail' => json_encode($request->input('problem_detail', []), JSON_UNESCAPED_UNICODE), // เก็บ JSON หากไม่ใช่รูปแบบอาร์เรย์
                    'general_information_id' => $general_information->id
                ]
            ));

            $assess_patient_risk = AssessPatientRisk::create([
                'risk' => json_encode($request->input('risk', []), JSON_UNESCAPED_UNICODE),
                'risk_detail' => json_encode($request->input('risk_detail', []), JSON_UNESCAPED_UNICODE),
                'general_information_id' => $general_information->id,
            ]);

            $social_support = SocialSupport::create(array_merge(
                $request->only(['social_detail']),
                ['general_information_id' => $general_information->id]
            ));

            $monitor_and_evaluate = MonitorAndEvaluate::create(array_merge(
                $request->only(['monitor_and_evaluate_detail']),
                ['general_information_id' => $general_information->id]
            ));

            $termination_of_service = TerminationOfService::create(array_merge(
                $request->only([
                    'cause',
                    'cause_detail',
                ]),
                ['general_information_id' => $general_information->id]
            ));

            $family_assessments = FamilyAssessments::create([
                'result' => $request->input('result'),
                'total_score' => $request->input('total_score'),
                'general_information_id' => $general_information->id,
            ]);

            // Other tables ...

            // Step 3: Handle file uploads
            // ตรวจสอบและจัดการ family_tree
            $filename_family = null;
            $filename_house = null;

            // อัปโหลด family_tree
            if ($request->hasFile('family_tree')) {
                $file = $request->file('family_tree');
                $extension = $file->getClientOriginalExtension();
                if (!in_array($extension, ['jpeg', 'png', 'jpg', 'gif'])) {
                    return redirect()->back()->withErrors(['family_tree' => 'Invalid file type for family tree.']);
                }

                $filename_family = time() . '_' . uniqid() . '.' . $extension;
                $file->move(public_path('images/family_tree'), $filename_family);
            }

            // อัปโหลด house_map
            if ($request->hasFile('house_map')) {
                $file = $request->file('house_map');
                $extension = $file->getClientOriginalExtension();
                if (!in_array($extension, ['jpeg', 'png', 'jpg', 'gif'])) {
                    return redirect()->back()->withErrors(['house_map' => 'Invalid file type for house map.']);
                }

                $filename_house = time() . '_' . uniqid() . '.' . $extension;
                $file->move(public_path('images/house_map'), $filename_house);
            }

            // บันทึกข้อมูลลงฐานข้อมูล
            FamilyTreeAndHouseMap::create([
                'family_tree' => $filename_family ? 'images/family_tree/' . $filename_family : null,
                'house_map' => $filename_house ? 'images/house_map/' . $filename_house : null,
                'general_information_id' => $general_information->id,
            ]);
            return redirect()->route('general_information.index')->with('success', 'Data saved successfully!');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while saving data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(GeneralInformation $general_information)
    {
        $general_information = GeneralInformation::all();
        return view('general_information.show', compact('general_information'));
    }
    public function edit($id)
    {
        $general_information = GeneralInformation::findOrFail($id);
        $finding_facts = FindingFacts::all();
        $social_informations = SocialInformations::all();
        $problem = Problem::all();
        $assess_patient_risk = AssessPatientRisk::all();
        $social_support = SocialSupport::all();
        $monitor_and_evaluate = MonitorAndEvaluate::all();
        $termination_of_service = TerminationOfService::all();
        $family_assessments = FamilyAssessments::all();
        $family_tree_and_house_map = FamilyTreeAndHouseMap::all();
        return view('admin.general_information.edit', compact([
            'general_information',
            'finding_facts',
            'social_informations',
            'problem',
            'assess_patient_risk',
            'social_support',
            'monitor_and_evaluate',
            'termination_of_service',
            'family_assessments',
            'family_tree_and_house_map'
        ]));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            // table general_information
            'case_date' => 'required',
            'hn' => 'required',
            'an' => 'required',
            'sn' => 'required',
            'prefix' => 'required',
            'full_name' => 'required',
            'id_card_num' => 'required',
            'birth_date' => 'required',
            'age' => 'required',
            'nationality' => 'required',
            'ethnicity' => 'required',
            'education' => 'required',
            'religion' => 'required',
            'marital_status' => 'required',
            'healthcare_rights' => 'required',
            'occupation' => 'required',
            'phone_num' => 'required',
            'current_address' => 'required',
            'target_group' => 'required',
            // table finding_facts
            'receive' => 'required',
            'receive_detail' => 'nullable',
            'admit_date' => 'nullable',
            'facts_target_group' => 'required',
            'facts_target_group_detail' => 'nullable',
            'medical_expenses' => 'required',
            'can_pay' => 'required',
            'helping_pay' => 'required',
            'informant' => 'required',
            'other_name' => 'nullable',
            'relation' => 'nullable',
            'address_informant' => 'required',
            'informant_phone_num' => 'nullable',
            'income' => 'required',
            'source_of_income' => 'required',
            'source_of_income_detail' => 'nullable',
            'having_debt' => 'required',
            'total_debt' => 'nullable',
            'source_of_debt' => 'nullable',
            // table social informations
            'social_information' => 'required|array',
            'conditions_of_problems_found' => 'required',
            'help_planning' => 'required',
            // table problem
            'problem_detail' => 'required|array',
            // table assess_patient_risk
            'risk' => 'required|array',
            'risk_detail' => 'nullable|array',
            // table social_support
            'social_detail' => 'required',
            // table monitor_and_evaluate
            'monitor_and_evaluate_detail' => 'required',
            //table termination_of_service
            'cause' => 'required',
            'cause_detail' => 'nullable',
            //table family_assessments
            'result' => 'required',
            'total_score' => 'nullable',
            //table family_tree_and_house_map
            'family_tree.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'house_map.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $general_information = GeneralInformation::findOrFail($id);

        try {
            // Step 1: Create General Information
            $general_information->update($request->only([
                'case_date',
                'hn',
                'an',
                'sn',
                'prefix',
                'full_name',
                'id_card_num',
                'birth_date',
                'age',
                'nationality',
                'ethnicity',
                'education',
                'religion',
                'marital_status',
                'healthcare_rights',
                'occupation',
                'phone_num',
                'current_address',
                'target_group',
            ]));

            // Step 2: Create related tables
            $finding_facts_data = $request->only([
                'receive',
                'receive_detail',
                'admit_date',
                'facts_target_group',
                'medical_expenses',
                'can_pay',
                'helping_pay',
                'informant',
                'other_name',
                'relation',
                'address_informant',
                'informant_phone_num',
                'income',
                'source_of_income',
                'source_of_income_detail',
                'having_debt',
                'total_debt',
                'source_of_debt',
            ]);

            // เพิ่มค่าเริ่มต้นให้กับ facts_target_group_detail
            $finding_facts_data['facts_target_group_detail'] = $request->input('facts_target_group_detail', '');

            // ใช้ updateOrCreate สำหรับการจัดการ FindingFacts
            FindingFacts::updateOrCreate(
                ['general_information_id' => $general_information->id],
                $finding_facts_data
            );

            $social_informations = SocialInformations::updateOrCreate(
                ['general_information_id' => $general_information->id],
                [
                    'social_information' => json_encode($request->input('social_information', []), JSON_UNESCAPED_UNICODE),
                    'conditions_of_problems_found' => $request->input('conditions_of_problems_found', ''),
                    'help_planning' => $request->input('help_planning', ''),
                ]
            );

            $problem = Problem::updateOrCreate(
                ['general_information_id' => $general_information->id],
                [
                    'problem_detail' => json_encode($request->input('problem_detail', []), JSON_UNESCAPED_UNICODE),
                ]
            );

            $assess_patient_risk = AssessPatientRisk::updateOrCreate(
                ['general_information_id' => $general_information->id],
                [
                    'risk' => json_encode($request->input('risk', []), JSON_UNESCAPED_UNICODE),
                    'risk_detail' => json_encode($request->input('risk_detail', []), JSON_UNESCAPED_UNICODE),
                ]
            );

            $social_support = SocialSupport::updateOrCreate(
                ['general_information_id' => $general_information->id],
                $request->only(['social_detail'])
            );

            $monitor_and_evaluate = MonitorAndEvaluate::updateOrCreate(
                ['general_information_id' => $general_information->id],
                $request->only(['monitor_and_evaluate_detail'])
            );

            $termination_of_service = TerminationOfService::updateOrCreate(
                ['general_information_id' => $general_information->id],
                $request->only(['cause', 'cause_detail'])
            );

            $family_assessments = FamilyAssessments::updateOrCreate(
                ['general_information_id' => $general_information->id],
                [
                    'result' => $request->input('result'),
                    'total_score' => $request->input('total_score'),
                ]
            );
            // Other tables ...

            // Step 3: Handle file uploads
            // ตรวจสอบและจัดการ family_tree
            // ดึงข้อมูล FamilyTreeAndHouseMap ที่เกี่ยวข้อง
            $family_tree_and_house_map = FamilyTreeAndHouseMap::where('general_information_id', $general_information->id)->first();

            $filename_family = $family_tree_and_house_map->family_tree ?? null;
            $filename_house = $family_tree_and_house_map->house_map ?? null;

            // อัปโหลด family_tree
            if ($request->hasFile('family_tree')) {
                $file = $request->file('family_tree');
                $extension = $file->getClientOriginalExtension();

                // ตรวจสอบประเภทไฟล์
                if (!in_array($extension, ['jpeg', 'png', 'jpg', 'gif'])) {
                    return redirect()->back()->withErrors(['family_tree' => 'Invalid file type for family tree.']);
                }

                // ลบไฟล์เก่า
                $oldFile = public_path($family_tree_and_house_map->family_tree ?? '');
                if (File::exists($oldFile)) {
                    File::delete($oldFile);
                }

                // สร้างชื่อไฟล์ใหม่
                $filename_family = 'images/family_tree/' . time() . '_' . uniqid() . '.' . $extension;

                // ย้ายไฟล์ไปยังโฟลเดอร์ที่ต้องการ
                $file->move(public_path('images/family_tree'), $filename_family);
            }

            // อัปโหลด house_map
            if ($request->hasFile('house_map')) {
                $file = $request->file('house_map');
                $extension = $file->getClientOriginalExtension();

                // ตรวจสอบประเภทไฟล์
                if (!in_array($extension, ['jpeg', 'png', 'jpg', 'gif'])) {
                    return redirect()->back()->withErrors(['house_map' => 'Invalid file type for house map.']);
                }

                // ลบไฟล์เก่า
                $oldFile = public_path($family_tree_and_house_map->house_map ?? '');
                if (File::exists($oldFile)) {
                    File::delete($oldFile);
                }

                // สร้างชื่อไฟล์ใหม่
                $filename_house = 'images/house_map/' . time() . '_' . uniqid() . '.' . $extension;

                // ย้ายไฟล์ไปยังโฟลเดอร์ที่ต้องการ
                $file->move(public_path('images/house_map'), $filename_house);
            }

            // อัปเดตหรือสร้างข้อมูลใหม่
            FamilyTreeAndHouseMap::updateOrCreate(
                ['general_information_id' => $general_information->id], // เงื่อนไข
                [
                    'family_tree' => $filename_family, // ใช้ไฟล์ใหม่ถ้ามี
                    'house_map' => $filename_house, // ใช้ไฟล์ใหม่ถ้ามี
                ]
            );
            return redirect()->route('general_information.index')->with('success', 'Data saved successfully!');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while saving data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
