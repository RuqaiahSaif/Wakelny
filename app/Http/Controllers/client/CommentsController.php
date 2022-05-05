<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    //

    public function save(Request $request)
    {
        // try {
        $request->validate([
            'cost' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
        ], [
            'cost.required' => 'رجاء قم بأدخال التكلفه لهذا المشروع',
            'duration.required' => 'حقل المده مطلوب',
            'duration.numeric' => 'يجب ان يكون حق المده من نوع رقمي',
        ]);

        $comment = new Comments();
        $comment->user_id = Auth::id();
        $comment->post_id = $request->post_id;
        $comment->cost = $request->cost;
        $comment->duration = $request->duration;
        $comment->description = $request->message;
        $comment->is_active = 1;
        $comment->cost_after_taxs = $request->cost / 0.5;

        if ($comment->save()) {
            return redirect()->back()
                ->with(['message' => 'تم اضافة عرضك  بنجاح', 'type' => 'alert-success']);
        } else {
            return back()->with(['message' => 'فشلت عمليه الاضافة الرجاء اعاده المحاوله   ', 'type' => 'alert-danger']);
        }
        // } catch (\Throwable $th) {
        //throw $th;
        // return back()->with(['message' => 'فشلت عمليه الاضافة الرجاء اعاده المحاوله   ', 'type' => 'alert-danger']);

        // }
    }
     // update comment
    
    public function update(Request $request, $comment_id)
    {
         $request->validate([
            'cost' => ['required', 'numeric'],
            'duration' => ['required', 'numeric'],
            'message' => ['required'],
        ], [
            'cost.required' => 'رجاء قم بأدخال التكلفه لهذا العرض',
            'duration.required' => 'حقل المده مطلوب',
            'duration.numeric' => 'يجب ان يكون حق المده من نوع رقمي',
            'message.required' => 'اضف تفاصيل للعرض ',
            // 'message.min' => 'حقل الوصف يجب ان يحتوي على 255 حرف على الاقل',
        ]);
       $comment = Comments::find($comment_id);
            // $comment->user_id = Auth::id();
        //   $comment->user_id = Auth::id();
        // $comment->post_id = $request->post_id;
        $comment->cost = $request->cost;
        $comment->duration = $request->duration;
        $comment->description = $request->message;
        $comment->is_active = 1;
        $comment->cost_after_taxs = $request->cost / 0.5;

             if ($comment->save()){
                  return redirect()->back()
                    ->with(['message' => 'تم تعديل العرض بنجاح', 'type' => 'alert-success']);
            } else
                 return back()->with(['message' => 'فشلت عمليه التعديل الرجاء اعاده المحاوله   ', 'type' => 'alert-danger']);
        }
    }


