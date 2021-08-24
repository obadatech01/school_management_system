<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use App\Models\AssignSubject;
use App\Models\SchoolSubject;
use App\Http\Controllers\Controller;

class AssignSubjectController extends Controller
{
    public function ViewAssignSubject()
    {
        $data['allData'] = AssignSubject::all();
        // $data['allData'] = AssignSubject::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('backend.setup.assign_subject.view_assign_subject', $data);
    }

    public function AddAssignSubject()
    {
        $data['subjects'] = SchoolSubject::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.assign_subject.add_assign_subject', $data);
    }

    // public function StoreAssignSubject(Request $request)
    // {
    //     $countClass = count($request->class_id);
    //     if($countClass != NULL) {
    //         for ($i=0; $i < $countClass; $i++) {
    //             $assign_subject = new FeeCategoryAmount();
    //             $assign_subject->fee_category_id = $request->fee_category_id;
    //             $assign_subject->class_id = $request->class_id[$i];
    //             $assign_subject->amount = $request->amount[$i];
    //             $assign_subject->save();
    //         }
    //     }

    //     $notification = array(
    //         'message' => 'Fee Amount Inserted Successfully!',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->route('fee.amount.view')->with($notification);
    // }

    // public function EditAssignSubject($fee_category_id)
    // {
    //     $data['editData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
    //     $data['fee_categories'] = FeeCategory::all();
    //     $data['classes'] = StudentClass::all();
    //     // dd($data['editData']->toArray());
    //     return view('backend.setup.assign_subject.edit_assign_subject', $data);
    // }

    // public function UpdateAssignSubject(Request $request, $fee_category_id)
    // {
    //     if($request->class_id == NULL) {
    //         $notification = array(
    //             'message' => 'Sorry! You don\'t select any class amount',
    //             'alert-type' => 'error'
    //         );

    //         return redirect()->route('fee.amount.edit', $fee_category_id)->with($notification);
    //     } else {
    //         $countClass = count($request->class_id);
    //         FeeCategoryAmount::where('fee_category_id',$fee_category_id)->delete();
    //             for ($i=0; $i < $countClass; $i++) {
    //                 $assign_subject = new FeeCategoryAmount();
    //                 $assign_subject->fee_category_id = $request->fee_category_id;
    //                 $assign_subject->class_id = $request->class_id[$i];
    //                 $assign_subject->amount = $request->amount[$i];
    //                 $assign_subject->save();
    //             }
    //     }

    //     $notification = array(
    //         'message' => 'Data Updated Successfully!',
    //         'alert-type' => 'info'
    //     );

    //     return redirect()->route('fee.amount.view')->with($notification);
    // }

    // public function DetailsAssignSubject($fee_category_id)
    // {
    //     $data['detailsData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
    //     // dd($data['detailsData']->toArray());
    //     return view('backend.setup.assign_subject.details_assign_subject', $data);
    // }
}
