<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class BlogController extends Controller
{
    public function index()
    {

        $project = Project::paginate(20);

        return view('blog.index', [
            'projects' => $project
        ]
        );

    }
//        $project = project::all();
//        foreach ($project as $project) {
//            echo $project->id . ''. $project->title, '<br>';}
//        $project = new Project();
//        $project->title = "het wordt een mooie dag";
//        $project->intro = "dit is de intro van mijn projecten.";
//        $project->content = "lipsum";
//        $project->author = "Thijn Glas";
//        $project->image = "blog1.jpg";
//        $project->published = true;
//        $project->save();
//        }


}
