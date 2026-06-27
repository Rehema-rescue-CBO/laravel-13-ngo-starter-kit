@extends('layouts.base')
@php
$config = [
'app_name' => 'Rehema Rescue CBO',
'ContactEmail' => 'info@rehemarescue.org ',
'Gmail'=>'rehemarescueorg@gmail.com',
'ContactPhone1' => '+2547 13 370 599',
'ContactPhone2' => '+2547 13 370 599',
'Address' => 'Mburu Plaza,Kwame Nkuruma Road. P.O BOX 7927-01000,Kiambu,Thika,Kenya',
'Address2' => 'Mburu Plaza, Thika, Kenya',
'Website' => 'www.rehemarescue.org',
];
@endphp
@section('content')
@include('layouts.pageheader')
{{-- addd alert if session succes --}}
@if (session('success'))
<div class="container mt-4">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
{{-- end alert --}}
<!-- FAQs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">FAQs</p>
            <h1 class="display-6 mb-5">Frequently Asked Questions</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="accordionExample">
                    {{-- 1 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="accordion-header text-primary" id="headingOne">
                            <button class="accordion-button text-primary" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Rehema Rescue CBO?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Rehema Rescue Community-Based Organization (CBO) is a registered charitable
                                initiative in Thika, Kiambu County, Kenya. Dedicated to empowering and transforming
                                lives of vulnerable children, youth, and families through education, advocacy, health,
                                mentorship, and holistic integrated care.
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Are you officially registered, recognized by government and relevant bodies?.
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. Rehema Rescue CBO is fully registered by the Directorate of Social Development, in
                                accordance with the provision of Community Groups Registration Act, NO.30 of 2022,
                                under Registration NO. DSD/22/114/02/96102, and in accordance with the Public Benefit
                                Organizations (PBO) Act of 2013, and the Constitution of Kenya, 2010. We collaborate
                                with the Department of Children Services, local health facilities, schools, faith-based
                                organizations, and corporate sponsors to ensure comprehensive community support and
                                service delivery.
                            </div>
                        </div>
                    </div>
                    {{-- 3 --}}
                    {{-- <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Who qualifies for support under your programs/ who do you serve?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our beneficiaries include: orphans, disadvantaged children, children with disabilities,
                                    teen parents, survivors of gender-based violence, youths battling addiction or trauma
                                    and
                                    families in extreme poverty.
                                    We identify and enroll beneficiaries through referrals from local authorities, schools,
                                    hospitals, and community outreach.
                                </div>
                            </div>
                        </div> --}}
                    {{-- 4 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Who qualifies for support under your programs/ who do you serve?.
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our beneficiaries include: orphans, disadvantaged children, children with disabilities,
                                teen parents, survivors of gender-based violence, youths battling addiction or trauma
                                and
                                families in extreme poverty.
                                We identify and enroll beneficiaries through referrals from local authorities, schools,
                                hospitals, and community outreach.
                            </div>
                        </div>
                    </div>
                    {{-- 5 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What kind of services and programs do you offer?.
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We implement programs in:
                                <ul>
                                    <li>Education and Scholarship Support</li>
                                    <li>Health & Nutrition</li>
                                    <li>Mentorship and Technical Skills Development</li>
                                    <li>Mental Health and Drug Recovery</li>
                                    <li>Legal and Community Advocacy</li>
                                </ul>
                                Each program is designed to empower individuals and promote sustainable community
                                growth.
                            </div>
                        </div>
                    </div>
                    {{-- 6 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How can I volunteer or intern with you/ Rehema Rescue CBO?.
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                There are several ways to support our work:
                                <ul>
                                    <li>Volunteering: Offering your time and skills for various programs.</li>
                                    <li>Partnerships: Collaborating with us on projects or events.</li>
                                    <li>Advocacy: Raising awareness about our mission and programs.</li>
                                </ul>
                                Visit our website's "Get Involved" section for more details on how to contribute.
                            </div>
                        </div>
                    </div>
                    {{-- 7 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                How are you funded?.
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our work is supported through donations, partnerships, community contributions, and
                                collaborations with local and international well-wishers. All funds are used
                                transparently
                                and audited annually in line with the PBO Act’s accountability requirements.
                            </div>
                        </div>
                    </div>
                    {{-- 8 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Are donations to Rehema Rescue CBO used transparently?.
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. Every donation is meticulously tracked, recorded, and reported according to our
                                internal financial policy and the Public Benefit Organizations Act, 2013. Annual reports
                                and audited financial statements are shared with our stakeholders and the regulatory
                                authority.
                            </div>
                        </div>
                    </div>
                    {{-- 9 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                How do I donate or support your work?.
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can support us financially, through in-kind contributions or by partnering in our
                                community initiatives.
                                Please click "Donate" on our website or reach out through our donations and help desk
                                <a href="{{ route('contact') }}">Contact Us</a> for more details.
                                All donations are strictly used for program delivery and beneficiary support, in line
                                with
                                our financial policies and the PBO Act’s accountability standards.
                            </div>
                        </div>
                    </div>
                    {{-- 10 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                How are your board and staff structured?.
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Rehema Rescue operates under a defined governance framework:
                                <li>Executive Board– Oversees strategy and policy.</li>
                                <li>Supervisory Board– Monitors implementation and accountability.</li>
                                <li>Director / CEO– Connects management with operations.</li>
                                <li>Project Teams – Run daily programs and community work.</li>
                                This ensures clear accountability, leadership, and alignment with our mission.
                            </div>
                        </div>
                    </div>
                    {{-- 11 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="false"
                                aria-controls="collapseEleven">
                                How do you select beneficiaries and communities you work in?.
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Beneficiaries are identified through community outreach, referrals from schools, local
                                authorities, hospitals, and partner organizations. Selection is based on high
                                vulnerability
                                levels - those facing extreme poverty, high dropout rates, neglect, substance abuse and
                                willingness to participate in empowerment programs.
                                'Needs Assessments' and 'Community Consultations' are conducted before launching any
                                program.
                            </div>
                        </div>
                    </div>
                    {{-- 12 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="false"
                                aria-controls="collapseTwelve">
                                What laws and policies guide your work?.
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our operations are guided by:
                                <li>Public Benefit Organizations Act, 2013</li>
                                <li>Constitution of Kenya, 2010 (Articles 10 & 232)</li>
                                <li>Children’s Act, 2022</li>
                                <li>Data Protection Act, 2019</li>
                                <li>Labor and Employment Laws</li>
                                These laws ensure our work remains ethical,
                            </div>
                        </div>
                    </div>
                    {{-- 13 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                                Do you work with other organizations?
                            </button>
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes. We collaborate with local authorities, ministries, NGOs, faith-based institutions,
                                schools, and healthcare providers to ensure holistic and sustainable support for our
                                beneficiaries.
                            </div>
                        </div>
                    </div>
                    {{-- 14 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourteen" aria-expanded="false"
                                aria-controls="collapseFourteen">
                                How can a community group or other organizations partner with you?
                            </button>
                        </h2>
                        <div id="collapseFourteen" class="accordion-collapse collapse"
                            aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We value and welcome partnerships that align with our mission. Whether you represent a
                                school, business, NGO, or government agency, feel free to reach out via our partnership
                                desk ('Contact us') or visit our office in Thika to explore avenues on collaboration.
                            </div><!--  -->
                        </div>
                    </div>
                    {{-- 15 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingFifteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFifteen" aria-expanded="false"
                                aria-controls="collapseFifteen">
                                How do you handle sensitive issues like child protection and privacy?
                            </button>
                        </h2>
                        <div id="collapseFifteen" class="accordion-collapse collapse"
                            aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We have strict Child Protection and Data Privacy policies that ensure every
                                beneficiary’s
                                dignity and safety are protected. Our team and volunteers are trained to handle cases
                                ethically and confidentially, following national child protection
                                guidelines.{{-- --}}
                            </div>
                        </div>
                    </div>
                    {{-- 16 --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingSixteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSixteen" aria-expanded="false"
                                aria-controls="collapseSixteen">
                                Can I find your annual reports or results? How?.
                            </button>
                        </h2>
                        <div id="collapseSixteen" class="accordion-collapse collapse"
                            aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes you can. Our annual reports, financial statements, and project summaries are
                                available to partners and stakeholders upon request via Our Contacts. They highlight our
                                impact, reach, and responsible use of donor funds.{{-- --}}
                            </div>
                        </div>
                    </div>
                    {{-- 17 contact --}}
                    <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                        <h2 class="accordion-header" id="headingSeventeen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeventeen" aria-expanded="false"
                                aria-controls="collapseSeventeen">
                                How can I contact Rehema Rescue CBO?.
                            </button>
                        </h2>
                        <div id="collapseSeventeen" class="accordion-collapse collapse"
                            aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can reach us via:
                                <div class="color-blue">
                                    <li class="text-secondary">{{ $config['ContactPhone1'] }}</li>
                                    <li class="text-secondary">{{ $config['ContactEmail'] }}</li>
                                    <li class="text-secondary">{{ $config['Gmail'] }}</li>
                                    <li class="text-secondary">{{ $config['Website'] }}</li>
                                    <li class="text-secondary">{{ $config['Address'] }}</li>
                                    <li class="text-secondary">Our office at Thika, Kiambu County, Kenya.</li>
                                </div>
                                Our team is ready to assist with any inquiries or support needs.


                            </div>
                        </div>
                    </div>
                    {{-- End --}}

                </div>
            </div>
        </div>
    </div>

    <!-- FAQs End -->
    <style>
        .accordion-item {
            border: none;
            margin-bottom: 1.5rem;
            border-radius: .5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            /* Ensures border-radius is applied correctly */
        }

        .accordion-button {
            font-weight: 600;
        }

        .accordion-button:not(.collapsed) {
            color: var(--bs-primary);
            background-color: #f8f9fa;
            box-shadow: none;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: transparent;
        }
    </style>
    @endsection
