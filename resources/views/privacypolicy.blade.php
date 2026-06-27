@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <style>
        .privacy-policy-content {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #4a5568;
            /* gray-700 */
            font-size: 1rem;
            /* 16px */
        }

        .privacy-policy-content h2 {
            font-size: 1.875rem;
            /* text-3xl */
            font-weight: 600;
            color: #1a202c;
            /* gray-900 */
            margin-top: 2.5rem;
            /* mt-10 */
            margin-bottom: 1rem;
            /* mb-4 */
            padding-bottom: 0.5rem;
            /* pb-2 */
            border-bottom: 1px solid #e2e8f0;
            /* border-gray-300 */
        }

        .privacy-policy-content h3 {
            font-size: 1.25rem;
            /* text-xl */
            font-weight: 600;
            color: #2d3748;
            /* gray-800 */
            margin-top: 2rem;
            /* mt-8 */
            margin-bottom: 0.75rem;
            /* mb-3 */
        }

        .privacy-policy-content p {
            line-height: 1.6;
            margin-bottom: 1rem;
            /* mb-4 */
        }

        .privacy-policy-content ul {
            list-style-position: outside;
            list-style-type: disc;
            padding-left: 1.5rem;
            /* pl-6 */
            margin-bottom: 1rem;
            /* mb-4 */
        }

        .privacy-policy-content li {
            margin-bottom: 0.5rem;
            /* mb-2 */
        }
    </style>


    <div class="privacy-policy-content container mx-auto px-4 py-8">
        <h2>Overview</h2>
        <p>
            <strong>Rehema Rescue CBO</strong> privacy policies align with The <strong>Data Protection Act 2019</strong>,
            <strong>PBO Act</strong>,
            <strong>Children Act</strong> and The <strong>Constitution of Kenya</strong>.
        </p>

        <h2>1. Introduction</h2>
        <p>
            <strong>Rehema Rescue CBO</strong> (“we”, “our”, “us”) is committed to protecting the privacy, dignity
            and rights of all people whose personal data we collect and process through our website
            and services. This Privacy Policy explains what personal data we collect, why we collect
            it, how we use it, how we protect it, and your rights as a data subject under Kenyan Law.
            This policy applies to personal data collected by <strong>Rehema Rescue</strong> via: this website (actual
            website domain), donation and volunteer forms, email, phone, WhatsApp, and any offline
            forms that are later digitized. Our policies and procedures comply with the <strong>Constitution
                of Kenya</strong> (right to privacy) and the <strong>Data Protection Act, 2019</strong>. [Kenya Law Reform
            Commission (KLRC)]
        </p>

        <h2>2. Who We Are as Contact & Data Protection Officer (DPO)</h2>
        <ul>
            <li><strong>Organization:</strong> Rehema Rescue CBO</li>
            <li><strong>Address:</strong> Thika, Kiambu County, Kenya</li>
            <li><strong>General email:</strong> info@rehemarescue.org.</li>
            <li><strong>DPO / Privacy contact:</strong> (+2547 13370599)</li>
        </ul>

        <h2>3. Legal basis and principles for processing</h2>
        <p>We process personal data only where we have a lawful basis, including:</p>
        <ul>
            <li>Consent (e.g., newsletter sign-up, testimonials);</li>
            <li>Contractual necessity (e.g., volunteer agreements, service delivery);</li>
            <li>Legal obligation (e.g., regulatory reporting required by the <strong>PBO Act</strong> or taxation laws);
            </li>
            <li>Legitimate interests (e.g., protecting organizational security, communicating programme updates).</li>
        </ul>
        <p>All balanced against individual rights.</p>
        <p><strong>NOTE:</strong> All processing follows the <strong>Data Protection Act’s</strong> principles: lawfulness,
            fairness,
            transparency, purpose limitation, data minimization, accuracy, storage limitation, integrity and
            confidentiality, and accountability.
        </p>

        <h2>4. Types of personal data we collect</h2>
        <p>We may collect the following categories of personal data depending on the service:</p>
        <ul>
            <li>Basic identity & contact data - Full name, date of birth, gender, postal & email
                address, phone number, emergency contact.
            </li>
            <li>Sensitive / special categories (only when strictly necessary)</li>
            <li>Health Information (e.g., HIV status, chronic illness) and disability information
                for service provision — collected with explicit consent and strict safeguards.
                [Kenya Law]
            </li>
            <li>Children & minors’ Name, age, guardian contact, case notes, and assessment
                information necessary to deliver support— processed in line with the <strong>Children
                    Act</strong> and <strong>Data Protection Act</strong> requirements (parent/guardian consent and best-
                interest safeguards).
            </li>
            <li>Program records & case management - Beneficiary assessments, progress notes,
                referral records, attendance logs.
            </li>
            <li>Donations & payments - Donor name, contact, transaction metadata; card or
                mobile payment details may be processed by secure third-party payment
                processors (we DO NOT store full card numbers on our servers).
            </li>
            <li>Website & technical data - IP addresses, device/browser types, and pages visited,
                cookies, timestamps, and other analytics data.
            </li>
            <li>Communications - Emails, messages, application forms, chat transcripts (if you
                use contact/chat on the site).
            </li>
        </ul>

        <h2>5. How we collect data</h2>
        <ul>
            <li>Directly from you — donation forms, volunteer/beneficiary registration, email,
                phone, in-person forms.
            </li>
            <li>From third parties — referrals from partner organizations, schools, hospitals (only
                with lawful basis and consent as required by law).
            </li>
            <li>Automated collection — website cookies and analytics when you visit our site.</li>
        </ul>

        <h2>6. Use of photographs, videos & testimonials</h2>
        <p>We may ask for consent to use photographs, videos, or testimonials for
            fundraising, reporting and awareness-raising. We will:
        </p>
        <ul>
            <li>Ask for explicitly/ informed consent for identifiable images/videos, and for
                children obtain parental/guardian consent.
            </li>
            <li>Provide an opt-out or withdrawal route (noting withdrawal may not remove
                images already in printed material or already shared with third parties).
            </li>
            <li>Avoid using images that reveal sensitive information (e.g., medical status)
                without informed consent.
            </li>
        </ul>

        <h2>7. Processing children’s data</h2>
        <p>We take special care with children's data:</p>
        <ul>
            <li>We obtain informed parental/guardian consent before collecting personal data of a
                child, except where the law allows (e.g., provision of counselling or child
                protection services where consent rules have specific exceptions).
            </li>
            <li>We implement appropriate age verification measures and process only the
                minimum data necessary for the child’s care.
            </li>
        </ul>

        <h2>8. Sharing and third parties</h2>
        <p>We WILL NOT sell your personal data. We MAY share data with:</p>
        <ul>
            <li>Service providers (auditors, payment processors, cloud hosting, CRM platforms)
                under written data processing agreements that require them to protect the data.
            </li>
            <li>Government/Regulatory authorities when legally required (e.g., reporting under
                the <strong>PBO Act</strong>) or responding to lawful requests.
            </li>
            <li>Partner organizations for referrals or joint service delivery (only with informed
                consent or other legal basis).
            </li>
            <li>Emergency services or child protection authorities when essential to safeguard a
                child or vulnerable person.
            </li>
        </ul>
        <p><strong>NOTE:</strong> When transferring data outside Kenya, we will only do so where the transfer complies
            with the <strong>Data Protection Act</strong> requirements (adequate safeguards, contracts, or explicitly
            informed
            consent).
        </p>

        <h2>9. Retention / how long we keep data</h2>
        <p>We retain personal data only as long as necessary for the purpose collected and to meet
            legal obligations. Example retention schedule (adapt to operations):
        </p>
        <ul>
            <li>Donor records: 7 years (tax and audit requirements).</li>
            <li>Beneficiary case files: 10 years after case closure (or longer where required by
                law).
            </li>
            <li>Child protection records: retained securely for the period legally required by child
                protection rules (consult legal advisor for exact durations).
            </li>
            <li>Volunteer & staff records: as per employment and organizational policy
                (commonly 7 years).
            </li>
            <li>Website analytics & cookies: up to 2 years (with opt-out where required).</li>
        </ul>
        <p><strong>NOTE:</strong> We will securely delete or anonymize personal data when no longer required.</p>

        <h2>10. Data subject rights - How you can exercise them</h2>
        <p>Under the <strong>Data Protection Act</strong> you have rights, and we provide the following procedures:</p>

        <h3>Your rights include:</h3>
        <ul>
            <li>Right to be informed — this policy and our notices explain processing.</li>
            <li>Right of access — request a copy of personal data we hold.</li>
            <li>Right to rectification — request correction of inaccurate/incomplete data.</li>
            <li>Right to erasure (‘right to be forgotten’) where legal grounds permit.</li>
            <li>Right to restriction of processing — ask to limit processing in some
                circumstances.
            </li>
            <li>Right to data portability — receive a structured, machine-readable copy of
                personal data you provided.
            </li>
            <li>Right to object — object to processing on grounds of legitimate interests or direct
                marketing.
            </li>
            <li>Right not to be subject to automated decision-making (if applicable).</li>
        </ul>

        <h3>How to make a request:</h3>
        <ul>
            <li>Send a written request to: DPO /Privacy contact or our postal address.</li>
            <li>Include your full name, contact details, proof of identity, and describe the request.</li>
            <li>We will respond within the statutory time period (the Act sets timelines for
                responding; if we need more time we will inform you and explain why).
            </li>
        </ul>

        <h2>11. Security measures</h2>
        <p>We protect personal data with appropriate administrative, technical and physical
            safeguards including:
        </p>
        <ul>
            <li>Role-based access controls and least-privilege for staff.</li>
            <li>Encrypted storage and secure backups.</li>
            <li>Secure transmission (HTTPS/TLS) for website and online forms.</li>
            <li>Data Processing Agreements with third-party processors.</li>
            <li>Regular staff training, password policies, and incident response procedures.</li>
        </ul>
        <p><strong>NOTE:</strong> We review and update security controls regularly in line with good practice and guidance
            from Data Protection Officer.
        </p>

        <h2>12. Data breach notification</h2>
        <p>If a personal data breach occurs, we will:</p>
        <ul>
            <li>Activate our incident response plan and contain the breach;</li>
            <li>Notify the <strong>Office of the Data Protection Commissioner</strong> without undue delay and,
                where feasible, within 72 hours of becoming aware of the breach where required
                by law.
            </li>
            <li>Notify affected data subjects promptly where the breach is likely to result in a
                high risk to their rights and freedoms.
            </li>
            <li>Keep records of the breach and remedial actions.</li>
        </ul>

        <h2>13. Cookies, tracking & analytics</h2>
        <p>Our website uses cookies and analytics tools to improve usability and measure site
            performance. We use:
        </p>
        <ul>
            <li>Essential cookies for site functionality (e.g., session cookies).</li>
            <li>Performance & analytics cookies (to collect anonymous usage data).</li>
            <li>Optional marketing cookies (preference-based only with consent).</li>
        </ul>
        <p><strong>NOTE:</strong> You can control cookies via your browser settings and our cookie banner/consent
            mechanism. For details on cookies stored and their retention.
        </p>

        <h2>14. Payment & donation details</h2>
        <p>We use reputable third-party payment processors for online donations (they process card
            or mobile money details). We do not retain full card numbers on our servers. Payment
            processors’ privacy and security practices apply to payment information. We will provide
            receipts and donor acknowledgement in line with donor consent preferences and Kenyan
            regulatory requirements related to <strong>PBOs</strong>.
        </p>

        <h2>15. CCTV, biometrics and surveillance</h2>
        <p>If we use CCTV or biometric systems in our premises for security, we will:</p>
        <ul>
            <li>Publish clear signage.</li>
            <li>Limit footage to security purposes only.</li>
            <li>Retain footage for a limited period (e.g., 30–90 days) unless retained for an
                incident investigation.
            </li>
            <li>Securely store and restrict access to footage.</li>
        </ul>

        <h2>16. Data protection by design & default</h2>
        <p>We adopt privacy-by-design and privacy-by-default: integrating data protection into
            projects, minimizing data collection, anonymizing or pseudonymising where possible,
            and conducting <strong>Data Protection Impact Assessments (DPIAs)</strong> for high-risk processing.
        </p>

        <h2>17. Links to other sites</h2>
        <p>Our website may link to other websites. This policy does not cover third-party websites.
            Please check their privacy policies before sharing personal data.
        </p>

        <h2>18. Changes to this policy</h2>
        <p>We may update this privacy policy from time to time. Substantive changes will be posted
            on this page with an updated on “Last updated” date and, where appropriate, notified to
            users by email or website notice.
        </p>

        <h2>Legal & regulatory context (summary)</h2>
        <ul>
            <li>We process personal data in line with the <strong>Data Protection Act, 2019</strong> (rights of data
                subjects, data breach notification, data processing principles, child data protections,
                transfers out of Kenya). [Kenya Law]
            </li>
            <li>We comply with the <strong>Constitution of Kenya</strong> (right to privacy). ([Kenya Law Reform
                Commission [KLRC])
            </li>
            <li>We operate within the regulatory framework of the <strong>Public Benefit Organizations (PBO)
                    Act</strong> for filing, reporting and governance obligations. [Kenya Law]
            </li>
            <li>Child protection activities are also guided by the <strong>Children Act</strong> and national child
                protection policies. [Kenya Law]
            </li>
        </ul>

        <h2>How to complain</h2>
        <p>If you have a complaint about how we handled your personal data:</p>
        <ul>
            <li>Contact our DPO at: DPO Contact. (Or send a letter to our registered office).</li>
            <li>If not satisfied with our response, you may lodge a complaint with the <strong>Office of the Data
                    Protection Commissioner (ODPC)</strong> via <a href="https://www.odpc.go.ke">https://www.odpc.go.ke</a>
                or official complaints
                portals.
            </li>
        </ul>
        <ul>
            <h2>Sources & further reading.</h2>
            <p> I. Data Protection Act, 2019 (Kenya). [Kenya Law]
                <br>
                II. ODPC — Personal Data Protection Handbook & breach reporting guidance. [Data
                Protection Office]
                <br>
                III. Public Benefit Organizations Act, 2013 (PBO Act). [Kenya Law] <br>
                IV. Children Act 2022 (Kenya). [Kenya Law] <br>
                V. Constitution of Kenya — Article 31 (Privacy). [Kenya Law Reform Commission
                (KLRC)]
            </p>
        </ul>
    </div>

    <hr>
@endsection
