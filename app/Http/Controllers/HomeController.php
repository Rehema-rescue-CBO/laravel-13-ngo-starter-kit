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
        $testmonials= \App\Models\Testmonial::latest()->take(3)->get();

        $impactStats = [
            [
                'icon'  => 'fa-user-graduate',
                'value' => 420,
                'title' => 'Education & Enrollment',
                'desc'  => 'Teens and youths successfully enrolled in schools and institutions of higher learning to secure their future.',
            ],
            [
                'icon'  => 'fa-hand-holding-heart',
                'value' => 71,
                'suffix' => '%',
                'title' => 'Rehabilitation & Reform',
                'desc'  => 'Of enrolled addicts in our programs have successfully reformed and integrated back into society.',
            ],
            [
                'icon'  => 'fa-comments',
                'value' => 440,
                'title' => 'Mentorship & Support',
                'desc'  => 'Vulnerable individuals benefited through supportive care, direct guidance, and structured counselling.',
            ],
        ];

        return view('pages.home', compact('title', 'testmonials', 'impactStats'));
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
        $programs = \App\Models\Program::latest()->paginate(10);
        return view('pages.programs', compact('title', 'programs'));
    }

    //show single program
    public function showProgram(\App\Models\Program $program): \Illuminate\View\View
    {
        $title = $program->title;
        $otherPrograms = \App\Models\Program::where('id', '!=', $program->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.program-details', compact('title', 'program', 'otherPrograms'));
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
        $beneficiaries = \App\Models\Testmonial::latest()->paginate(10);
        return view('pages.beneficiaries', compact('title', 'beneficiaries'));
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
        $publications = \App\Models\Publication::latest()->paginate(10);
        return view('pages.publications', compact('title', 'publications'));
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

    //show single testimonial
    public function showTestimonial(\App\Models\Testmonial $testimonial): \Illuminate\View\View
    {
        $title = $testimonial->name;
        $otherTestimonials = \App\Models\Testmonial::where('id', '!=', $testimonial->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.testimonial-details', compact('title', 'testimonial', 'otherTestimonials'));
    }

    //end of class  
}
