<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendContactForm;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "Home";
        return view('pages.home', compact('title'));
    }
    //About
    public function about()
    {
        $title = "About Us";
        return view('pages.about', compact('title'));
    }
    public function contact()
    {
        $title = "Contact Us";
        return view('pages.contact', compact('title'));
    }
    //Programs
    public function programs()
    {
        $title = "Our Programs";
        return view('pages.programs', compact('title'));
    }
    //Events
    public function events()
    {
        $title = "Our Events";
        return view('pages.events', compact('title'));
    }
    //Donation
    public function donation()
    {
        $title = "Donation";
        return view('pages.donation', compact('title'));
    }
    //Volunteer
    public function volunteer()
    {
        $title = "Volunteer";
        return view('pages.volunteer', compact('title'));
    }
    //FAQs
    public function faqs()
    {
        $title = "FAQs";
        return view('pages.faqs', compact('title'));
    }
    //privacy
    public function privacy()
    {
        $title = "Privacy Policy";
        return view('privacypolicy', compact('title'));
    }
    //partner

    public function partners()
    {
        $title = "Our Partners";
        return view('pages.partners', compact('title'));
    }
    //partner
    public function partner()
    {
        $title = "Partner With Us";
        return view('pages.partner', compact('title'));
    }
    //beneficiaries
    public function beneficiaries()
    {
        $title = "Beneficiaries";
        return view('pages.beneficiaries', compact('title'));
    }
    //transparency
    public function transparency()
    {
        $title = "Transparency & Management";
        return view('pages.transparency', compact('title'));
    }

    //events and stories
    public function eventsAndStories()
    {
        $title = "Events and Stories";
        return view('pages.events', compact('title'));
    }

    //get involved
    public function getInvolved()
    {
        $title = "Get Involved";
        return view('pages.getinvolved', compact('title'));
    }

    //donate
    public function donate()
    {
        $title = "Donate";
        return view('pages.donation', compact('title'));
    }

    //send email from contact form
    public function sendemail(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email logic here
        //use nofitication
        Notification::route('mail', 'contact@rehemarescue.org')->notify(new SendContactForm($data));


        return redirect()->route('faqs')->with('success', 'Your message has been sent successfully!');
    }

    //recommendations
    public function recommendations()
    {
        $title = "Recommendations";
        return view('pages.recomedations', compact('title'));
    }
    //publications
    public function publications()
    {
        $title = "Publications";
        return view('pages.publications', compact('title'));
    }
    //blogs
    public function blogs()
    {
        $title = "Blogs";
        $blogs = \App\Models\Blog::latest()->paginate(10);
        return view('pages.blogs', compact('title', 'blogs'));
    }

    //show single blog
    public function showBlog(\App\Models\Blog $blog): \Illuminate\View\View
    {
        $title = $blog->title;
        $recentBlogs = \App\Models\Blog::where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.blog-details', compact('title', 'blog', 'recentBlogs'));
    }

    //end of class  
}
