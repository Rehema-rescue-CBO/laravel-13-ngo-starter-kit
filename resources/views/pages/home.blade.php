@extends('layouts.base')


@section('content')
    {{-- addd alert if session succes --}}
    @if (session('success'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @include('inc.aboutHome')
     {{-- what we do --}}

    
    @include('inc.counter')
    {{-- @include('inc.video') --}}
    @include('inc.benif')
    @include('inc.beneficiaries')
    @include('inc.banner')
    @include('inc.logo-slider')
    @include('inc.newsletter')




  {{-- <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, Helvetica, sans-serif;
    }

    body{
      background: linear-gradient(135deg,#0f172a,#1e293b);
      color:#fff;
      min-height:100vh;
      padding:40px 20px;
    }

    .container{
      max-width:1200px;
      margin:auto;
    }

    /* TOP SECTION */

    .maintenance-box{
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.08);
      backdrop-filter: blur(10px);
      border-radius:24px;
      padding:50px 40px;
      text-align:center;
      box-shadow:0 10px 30px rgba(0,0,0,0.3);
      margin-bottom:40px;
    }

    .logo{
      width:90px;
      height:90px;
      background:#fff;
      color:#0f172a;
      margin:auto;
      border-radius:50%;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:28px;
      font-weight:bold;
      margin-bottom:25px;
    }

    h1{
      font-size:42px;
      margin-bottom:15px;
    }

    .subtitle{
      max-width:700px;
      margin:auto;
      color:#cbd5e1;
      font-size:18px;
      line-height:1.8;
      margin-bottom:35px;
    }

    /* CONTACTS */

    .contact-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
      gap:20px;
      margin-top:20px;
    }

    .contact-card{
      background:rgba(255,255,255,0.07);
      padding:22px;
      border-radius:16px;
      transition:0.3s ease;
    }

    .contact-card:hover{
      transform:translateY(-5px);
      background:rgba(255,255,255,0.12);
    }

    .contact-card h3{
      margin-bottom:10px;
      font-size:18px;
    }

    .contact-card p{
      color:#cbd5e1;
      font-size:15px;
    }

    /* THREE COLUMN SECTION */

    .info-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
      gap:25px;
    }

    .info-card{
      background:rgba(255,255,255,0.06);
      border:1px solid rgba(255,255,255,0.08);
      border-radius:20px;
      padding:35px 28px;
      transition:0.3s ease;
      position:relative;
      overflow:hidden;
    }

    .info-card:hover{
      transform:translateY(-8px);
      background:rgba(255,255,255,0.10);
    }

    .icon{
      width:65px;
      height:65px;
      background:rgba(255,255,255,0.12);
      border-radius:18px;
      display:flex;
      align-items:center;
      justify-content:center;
      margin-bottom:20px;
    }

    .icon svg{
      width:32px;
      height:32px;
      fill:#fff;
    }

    .info-card h2{
      margin-bottom:15px;
      font-size:24px;
    }

    .info-card p{
      color:#d1d5db;
      line-height:1.8;
      font-size:16px;
    }

    ul{
      padding-left:18px;
      color:#d1d5db;
      line-height:2;
    }

    .footer{
      text-align:center;
      margin-top:40px;
      color:#94a3b8;
      font-size:14px;
    }

    @media(max-width:768px){

      h1{
        font-size:32px;
      }

      .maintenance-box{
        padding:40px 25px;
      }

      .subtitle{
        font-size:16px;
      }
    }

  </style>
</head>
<body>

  <div class="container">

    <!-- Maintenance Section -->

    <div class="maintenance-box">

      <div class="logo">
        Rehema Rescue
      </div>

      <h1>We’ll Be Back Soon</h1>

      <p class="subtitle">
        Our website is currently undergoing scheduled maintenance.
        We are improving , preparing a better digital experience for you.
      </p>

      <div class="contact-grid">

        <div class="contact-card">
          <h3>Phone</h3>
          <p>+2547 13 370 599

</p>
        </div>

        <div class="contact-card">
          <h3>Email</h3>
          <p>rehemarescueorg@gmail.com

</p>
        </div>

        <div class="contact-card">
          <h3>Location</h3>
          <p>Mburu Plaza,Kwame Nkuruma Road. P.O BOX 7927-01000,Kiambu,Thika,Kenya</p>
        </div>

      </div>

    </div>

    <!-- Three Column Section -->

    <div class="info-grid">

      <!-- About -->

      <div class="info-card">

        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 2L1 21h22L12 2zm0 4.8L19.53 19H4.47L12 6.8z"/>
          </svg>
        </div>

        <h2>About Us</h2>

        <p>
          We are dedicated to delivering innovative digital solutions,
          professional services, and exceptional customer experiences
          that help businesses grow and succeed.
        </p>

      </div>

      <!-- Mission -->

      <div class="info-card">

        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 2L4 5v6c0 5 3.4 9.7 8 11 4.6-1.3 8-6 8-11V5l-8-3z"/>
          </svg>
        </div>

        <h2>Our Mission</h2>

        <p>
          To empower organizations and individuals through reliable,
          creative, and technology-driven solutions that create
          lasting impact and sustainable growth.
        </p>

      </div>

      <!-- Core Values -->

      <div class="info-card">

        <div class="icon">
          <svg viewBox="0 0 24 24">
            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
            2 5.42 4.42 3 7.5 3c1.74 0 3.41.81
            4.5 2.09C13.09 3.81 14.76 3 16.5 3
            19.58 3 22 5.42 22 8.5c0 3.78-3.4
            6.86-8.55 11.54L12 21.35z"/>
          </svg>
        </div>

        <h2>Core Values</h2>

        <ul>
          <li>Our principles are pillared on:</li>

<li>Respect,Empowerment,Hope, Equity.</li>

<li>Mentorship and Advocacy for the vulnerable in communities which primarily translates to “REHEMA RESCUE”..</li>
        
        </ul>

      </div>

    </div>

    <div class="footer">
      © 2026 Rehema Rescue CBO. All Rights Reserved.
    </div>

  </div>
 --}}

@endsection
