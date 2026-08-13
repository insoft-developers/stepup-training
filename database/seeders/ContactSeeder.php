<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::updateOrCreate(
            ['id' => 1],
            [
                'small_title' => 'Contact Us',

                'title_text' => 'Get In Touch With Us',

                'paragraph' => 'Have a question or need more information? Feel free to contact us. Our team is ready to help you with any questions or information you need.',

                'message_header' => 'Send Us A Message',

                'message_subtitle' => 'We would love to hear from you.',

                'name_label' => 'Name',

                'email_label' => 'Email',

                'phone_label' => 'Phone',

                'subject_label' => 'Subject',

                'message_label' => 'Message',

                'name_placeholder_text' => 'Enter your name',

                'email_placeholder_text' => 'Enter your email address',

                'phone_placeholder_text' => 'Enter your phone number',

                'subject_placeholder_text' => 'Enter subject',

                'message_placeholder_text' => 'Write your message here...',

                'button_text' => 'Send Message',
            ]
        );
    }
}
