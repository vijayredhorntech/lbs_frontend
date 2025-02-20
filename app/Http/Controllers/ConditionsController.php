<?php

namespace App\Http\Controllers;

class ConditionsController extends Controller
{
    public function index($type)
    {
        if ($type === 'terms_and_conditions') {
            $title = 'Terms And Conditions';
            $conditions=[
                'This official website of Lal Bahadur Shastri Goverenment Degree College Saraswati Nagar, has been developed to provide information to the general public.',
                'Though all efforts have been made to ensure the accuracy and currency of the content on this website, the same should not be construed as a statement of law or used for any legal purposes.',
                'These terms and conditions shall be governed by and construed in accordance with the Indian Laws. Any dispute arising under these terms and conditions shall be subject to the exclusive jurisdiction of the courts of India.',
                'The information posted on this website could include hypertext links or pointers to information created and maintained by non-government/private organizations. Lal Bahadur Shastri Degree College is providing these links and pointers solely for your information and convenience. When you select a link to an outside website, you are leaving the Lal Bahadur Shastri Degree College website and are subject to the privacy and security policies of the owners/sponsors of the outside website.',

            ];
        }
        elseif($type==='website_policies'){
            $title = 'Terms And Conditions';
            $conditions=[
                'Material featured on this site may be reproduced free of charge in any format or media without requiring specific permission. This is subject to the material being reproduced accurately and not being used in a derogatory manner or in a misleading context. Where the material is being published or issued to others, the source must be prominently acknowledged.',
                'However, the permission to reproduce this material does not extend to any material on this site which is explicitly identified as being the copyright of a third party. Authorization to reproduce such material must be obtained from the concerned copyright holders.',
                'At many places in this website, you shall find links to other websites/portals. The links have been placed for your convenience. L.B.S Degree College is not responsible for the contents and reliability of the linked websites and does not necessarily endorse the views expressed in them. Mere presence of the link or its listing on this Portal should not be assumed as endorsement of any kind. We cannot guarantee that these links will work all the time and we have no control over availability of linked pages',
                'There is no need for permission for linking directly to our website until unless otherwise specified. However, we would expect a communication from your side to inform us about any links provided to our site. Also, we do not permit our pages to be loaded into frames on any other site. Our website\'s pages must load into a newly opened browser window of the user.',
                'L.B.S. Degree College does not automatically capture any specific personal information from you, (like name, phone number or e-mail address), that allows us to identify you individually.',
                'We do not sell or share any personally identifiable information volunteered on the Department of Science & Technology site to any third party (public/private). Any information provided to this Portal will be protected from loss, misuse, unauthorized access or disclosure, alteration, or destruction.',
                'A cookie is a piece of software code that an internet web site sends to your browser when you access information at that site. This site does not use cookies.',
            ];
        }
        return view('conditions')->with([
            'title' => $title,
            'conditions' => $conditions,
        ]);
    }
}
