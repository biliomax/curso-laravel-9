<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Comment;
#use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;
use League\Flysystem\Visibility;

class CommentController extends Controller
{
    protected $comment;
    protected $user;

    public function __construct(Comment $comment, User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    public function index($userId)
    {
        if(!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $comments = $user->comments()->get();

        return view('users.comments.index', compact('user', 'comments'));
    }

    public function create($userId)
    {
        if(!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        return view('users.comments.create', compact('user'));
    }

    public function store(Request $request, $userId)
    {
        if(!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        #dd($request->all());

        $user->comments()->create([
            'body' => $request->body,
            'visible' => isset($request->visible)
        ]);

        return redirect()->route('comments.index', $user->id);
    }
}
