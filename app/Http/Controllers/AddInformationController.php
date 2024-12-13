<?php

namespace App\Http\Controllers;

use App\Models\AssessPatientRisk;
use App\Models\CenterTable;
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

class AddInformationController extends Controller
{
    //
    public function index()
    {
        $center_table = CenterTable::with([
            'general_information',
            'finding_facts',
            'social_informations',
            'problem',
            'assess_patient_risk',
            'social_support',
            'monitor_and_evaluate',
            'termination_of_service',
            'family_assessments',
            'family_tree_and_house_mep',
        ])->get();
        return view('home', ['center_tables' => $center_table]);
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
        return view('test', compact([
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
            'source_of_debt' => 'required',
            // table social informations
            'social_information' => 'required|array',
            'conditions_of_problems_found' => 'required',
            'help_planning' => 'required',
            // table problem
            'problem_detail' => 'required|array',
            // table assess_patient_risk
            'risk' => 'required|array',
            'risk_detail' => 'required|array',
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
            'family_tree' => 'nullable|image',  // ตรวจสอบว่าเป็นไฟล์ภาพ
            'house_map' => 'nullable|image',    // ตรวจสอบว่าเป็นไฟล์ภาพ
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 422);
        }
        try {
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
                'religion',
                'marital_status',
                'healthcare_rights',
                'occupation',
                'phone_num',
                'current_address',
                'target_group'
            ]));
            $finding_facts = FindingFacts::insert(array_merge(
                $request->only([
                    'receive',
                    'receive_detail',
                    'admit_date',
                    'facts_target_group',
                    'facts_target_group_detail',
                    'medical_expenses',
                    'can_pay',
                    'helping_pay',
                    'informant',
                    'informant_name',
                    'related',
                    'address_informant',
                    'income',
                    'source_of_income',
                    'source_of_income_detail',
                    'having_debt',
                    'total_debt',
                    'source_of_debt'
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม receive_detail
            ));
            $social_informations = SocialInformations::create(array_merge(
                $request->only([
                    'social_information',
                    'conditions_of_problems_found',
                    'help_planning',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            $problem = Problem::create($request->only([
                'problem_detail',
                'general_information_id',
            ]));
            $assess_patient_risk = AssessPatientRisk::create(array_merge(
                $request->only([
                    'risk',
                    'risk_detail',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            $social_support = SocialSupport::create(array_merge(
                $request->only([
                    'social_detail',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            $monitor_and_evaluate = MonitorAndEvaluate::create(array_merge(
                $request->only([
                    'monitor_and_evaluate_detail',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            $termination_of_service = TerminationOfService::create(array_merge(
                $request->only([
                    'cause',
                    'cause_detail',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            $family_assessments = FamilyAssessments::create(array_merge(
                $request->only([
                    'result',
                    'total_score',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            $family_tree_and_house_map = FamilyAssessments::create(array_merge(
                $request->only([
                    'family_tree',
                    'house_map',
                    'general_information_id',
                ]),
                ['general_information_id' => $general_information->id] // เพิ่ม general_information_id
            ));
            if ($request->hasFile('family_tree') && $request->file('family_tree')->isValid()) {
                // ใช้ไฟล์ได้ตามปกติ
                $path = $request->file('family_tree')->store('uploads/family_tree');
                $request->merge(['family_tree' => $path]);
            }

            if ($request->hasFile('house_map') && $request->file('house_map')->isValid()) {
                // ใช้ไฟล์ได้ตามปกติ
                $path = $request->file('house_map')->store('uploads/house_map');
                $request->merge(['house_map' => $path]);
            }
            return view('/home', [
                'general_information' => $general_information,
                'finding_facts' => $finding_facts,
                'social_informations' => $social_informations,
                'problem' => $problem,
                'assess_patient_risk' => $assess_patient_risk,
                'social_support' => $social_support,
                'monitor_and_evaluate' => $monitor_and_evaluate,
                'termination_of_service' => $termination_of_service,
                'family_assessments' => $family_assessments,
                'family_tree_and_house_map' => $family_tree_and_house_map,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while saving data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
