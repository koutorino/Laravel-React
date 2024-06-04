<?php

namespace App\Http\Controllers;

use App\Models\Like;

class LikeController extends Controller
{
  public function like($id)
  {
    Like::create([
      'post_id' => $id,
      'user_id' => 1,
    ]);

    session()->flash('success', 'You Liked the Reply.');

    return redirect()->back();
  }

  /**
   * 引数のIDに紐づくリプライにUNLIKEする
   *
   * @param $id リプライID
   * @return \Illuminate\Http\RedirectResponse
   */
  public function unlike($id)
  {
    $like = Like::where('post_id', $id)->where('user_id', 1)->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Reply.');

    return redirect()->back();
  }
}
