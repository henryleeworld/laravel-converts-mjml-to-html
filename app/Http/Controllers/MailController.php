<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Spatie\Mjml\Mjml;

class MailController extends Controller
{
    private function markupTemplate()
    {
        return '<mjml>
                <mj-body>
                    <mj-raw>
                        <!-- Company Header -->
                    </mj-raw>
                    <mj-section background-color="#f0f0f0">
                        <mj-column>
                            <mj-text font-style="italic" font-size="20px" color="#626262">' . __("Henry Lee's World") . '</mj-text>
                        </mj-column>
                    </mj-section>
                    <mj-raw>
                        <!-- Image Header -->
                    </mj-raw>
                    <mj-section background-url="' . Storage::url('images/the-witch-from-mercury-mail-header.jpg') . '" background-size="cover" background-repeat="no-repeat">
                        <mj-column>
                            <mj-text align="center" color="#fff" font-size="40px" font-family="Helvetica Neue">' . __("We’re a company that specializes in creating the best products possible.") . '</mj-text>
                            <mj-button background-color="#F63A4D" href="https://henrywar.blogspot.com/">' . __("Blog") . '</mj-button>
                        </mj-column>
                    </mj-section>
                    <mj-raw>
                        <!-- Intro text -->
                    </mj-raw>
                    <mj-section background-color="#fafafa">
                        <mj-column width="400px">
                            <mj-text font-style="italic" font-size="20px" font-family="Helvetica Neue" color="#626262">' . __("Belief") . '</mj-text>
                            <mj-text color="#525252">' . __("Innovative products and services for aerospace and defense.") . '</mj-text>
                            <mj-button background-color="#F45E43" href="https://henrywar.blogspot.com/">' . __("Know more") . '</mj-button>
                        </mj-column>
                    </mj-section>
                    <mj-raw>
                        <!-- Side image -->
                    </mj-raw>
                    <mj-section background-color="white">
                        <mj-raw>
                            <!-- Left image -->
                        </mj-raw>
                        <mj-column>
                            <mj-image width="200px" src="' . Storage::url('images/the-witch-from-mercury-mail-visual-001.jpg') . '"></mj-image>
                        </mj-column>
                        <mj-raw>
                            <!-- right paragraph -->
                        </mj-raw>
                        <mj-column>
                            <mj-text font-style="italic" font-size="20px" font-family="Helvetica Neue" color="#626262">' . __("Idea") . '</mj-text>
                            <mj-text color="#525252">' . __("Exceptional Service Exceeding Expectations.") . '</mj-text>
                        </mj-column>
                    </mj-section>
                    <mj-raw>
                        <!-- Icons -->
                    </mj-raw>
                    <mj-section background-color="#fbfbfb">
                        <mj-column>
                            <mj-image width="100px" src="' . Storage::url('images/the-witch-from-mercury-mail-01-thumb.png') . '"></mj-image>
                        </mj-column>
                        <mj-column>
                            <mj-image width="100px" src="' . Storage::url('images/the-witch-from-mercury-mail-02-thumb.png') . '"></mj-image>
                        </mj-column>
                        <mj-column>
                            <mj-image width="100px" src="' . Storage::url('images/the-witch-from-mercury-mail-03-thumb.png') . '"></mj-image>
                        </mj-column>
                    </mj-section>
                </mj-body>
            </mjml>';
    }
	
    public function toHtml() 
    {
        $html = Mjml::new()->hideComments()->toHtml($this->markupTemplate());
        echo $html;
    }
}
