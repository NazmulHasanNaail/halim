<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {
  //
  // Set a unique slug-like ID
  $prefix = 'halim-options';

  //
  // Create options
  CSF::createOptions($prefix, array(
    'menu_title' => 'Halim Options',
    'menu_slug'  => 'halim-options',
    'framework_title' => 'Halim Options by <small>Nazmul Hasan</small>',
  ));

  //
  // ======Create header section====
  CSF::createSection($prefix, array(
    'title'  => 'Header',
    'id' => 'header-options',
    'icon' => 'fas fa-address-card'
  ));
  //
  // Create a header sub section for Email And Phone
  CSF::createSection($prefix, array(
    'title'  => 'Email And Phone',
    'parent' => 'header-options',
    'icon' => 'fas fa-arrow-right',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'header-email',
        'type'  => 'text',
        'title' => 'Email',
      ),
      // A text field
      array(
        'id'    => 'header-phone',
        'type'  => 'text',
        'title' => 'Phone',
      ),

    )
  ));
  //
  // Create a header sub section for Logo
  CSF::createSection($prefix, array(
    'title'  => 'Upload Logo And Favicon',
    'parent' => 'header-options',
    'icon' => 'fas fa-arrow-right',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'logo',
        'type'  => 'media',
        'title' => 'Uplao a logo',
      ),

      //
      // A text field
      array(
        'id'    => 'fav_icon',
        'type'  => 'media',
        'title' => 'Uplao a faveicon',
      ),


    )
  ));
  //
  // Create a header sub section for Social Icons
  CSF::createSection($prefix, array(
    'title'  => 'Social Icons',
    'parent' => 'header-options',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'        => 'header_social_links',
        'type'      => 'group',
        'title'     => 'Social link',
        'fields'    => array(

          // A textarea field
          array(
            'id'    => 'header_social_link',
            'type'  => 'text',
            'title' => 'Add Social Link',
          ),

          // A textarea field
          array(
            'id'    => 'header_social_icon',
            'type'  => 'icon',
            'title' => 'Add Social Icon',
          ),

        )
      )

    )
  ));

  //
  // Create a header sub section for Logo
  CSF::createSection($prefix, array(
    'title'  => 'Header Advanced',
    'parent' => 'header-options',
    'icon' => 'fas fa-arrow-right',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'header-background',
        'type'  => 'background',
        'title' => 'Background',
        'output' => array('.header-top'),
      ),


      //
      // A text field
      array(
        'id'    => 'header-text-color',
        'type'  => 'color',
        'title' => 'Text Color',
        'output' => array('.header-top a'),
      ),

      array(
        'id'    => 'header-typography',
        'type'  => 'typography',
        'title' => 'Typography',
        'output' => array('.header-top a'),
      ),


    )
  ));


  //
  // =======Create About section=======
  CSF::createSection($prefix, array(
    'title'  => 'About',
    'id' => 'about_section',
    'icon' => 'fas fa-address-card'
  ));

  //
  // Create a about sub section for Section Heading
  CSF::createSection($prefix, array(
    'title'  => 'About Section Heading',
    'parent' => 'about_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      // A text field
      array(
        'id'    => 'about_heading_sub_title',
        'type'  => 'text',
        'title' => 'About Sub Title',
      ),

      // A text field
      array(
        'id'    => 'about_heading_title',
        'type'  => 'text',
        'title' => 'About Title',
      ),

      // A text field
      array(
        'id'    => 'about_heading_description',
        'type'  => 'textarea',
        'title' => 'About Description',
      ),

    )
  ));
  //
  // Create a about sub section for About page
  CSF::createSection($prefix, array(
    'title'  => 'About Content',
    'parent' => 'about_section',
    'icon' => 'fas fa-arrow-right',
    'fields' => array(
      // A text field
      array(
        'id'    => 'about_content_title',
        'type'  => 'text',
        'title' => 'Title',
      ),

      // A text field
      array(
        'id'    => 'about_content_desc',
        'type'  => 'textarea',
        'title' => 'Description',
      ),

      // A text field
      array(
        'id'    => 'about_page_link',
        'type'  => 'text',
        'title' => 'About Page Link',
      ),

    )
  ));
  //
  //Create a about sub section for About Features
  CSF::createSection($prefix, array(
    'title'  => 'About Features',
    'parent' => 'about_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'        => 'about_features',
        'type'      => 'group',
        'title'     => 'Features',
        'fields'    => array(

          // A text field
          array(
            'id'    => 'about_features_title',
            'type'  => 'text',
            'title' => 'Title',
          ),

          // A text field
          array(
            'id'    => 'about_featurs_desc',
            'type'  => 'textarea',
            'title' => 'Description',
          ),

          // A textarea field
          array(
            'id'    => 'about_feature_icon',
            'type'  => 'icon',
            'title' => 'Add Features Icon',
          ),

        )
      )

    )
  ));

  //
  //Create a about sub section for About FAQ
  CSF::createSection($prefix, array(
    'title'  => 'About FAQ',
    'parent' => 'about_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'        => 'about_faq',
        'type'      => 'group',
        'title'     => 'FAQ',
        'fields'    => array(

          // A text field
          array(
            'id'    => 'about_faq_title',
            'type'  => 'text',
            'title' => 'Title',
          ),

          // A text field
          array(
            'id'    => 'about_faq_desc',
            'type'  => 'textarea',
            'title' => 'Description',
          ),

        )
      )

    )
  ));

  //
  //Create a about sub section for About FAQ
  CSF::createSection($prefix, array(
    'title'  => 'About Skills',
    'parent' => 'about_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'        => 'about_skill',
        'type'      => 'group',
        'title'     => 'FAQ',
        'fields'    => array(

          // A text field
          array(
            'id'    => 'about_skill_title',
            'type'  => 'text',
            'title' => 'Title',
          ),

          // A text field
          array(
            'id'    => 'about_skill_number',
            'type'  => 'text',
            'title' => 'Skill Number',
          ),

        )
      )

    )
  ));
  //
  // =======Create Contact section=======
  CSF::createSection($prefix, array(
    'title'  => 'Contact',
    'id' => 'contact_section',
    'icon' => 'fas fa-address-card'
  ));
  //Create a about sub section for About FAQ
  CSF::createSection($prefix, array(
    'title'  => 'Contact',
    'parent' => 'contact_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'        => 'contact',
        'type'      => 'group',
        'title'     => 'Contact',
        'fields'    => array(

          // A text field
          array(
            'id'    => 'contact_title',
            'type'  => 'text',
            'title' => 'Title',
          ),

          // A text field
          array(
            'id'    => 'contact_desc',
            'type'  => 'text',
            'title' => 'Contact Description',
          ),
          // A text field
          array(
            'id'    => 'contact_icon',
            'type'  => 'icon',
            'title' => 'Contact Icon',
          ),

        )
      ),
      array(
        'id'    => 'contact-map',
        'type'  => 'map',
        'title' => 'Google Map',
      ),


    )
  ));
  //
  // =======Create Counter section=======
  CSF::createSection($prefix, array(
    'title'  => 'Counter Section',
    'id' => 'counter_section',
    'icon' => 'fas fa-address-card'
  ));
  //Create a about sub section for About FAQ
  CSF::createSection($prefix, array(
    'title'  => 'Counters',
    'parent' => 'counter_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'        => 'Counter',
        'type'      => 'group',
        'title'     => 'Counters',
        'fields'    => array(

          // A text field
          array(
            'id'    => 'counter_title',
            'type'  => 'text',
            'title' => 'Title',
          ),

          // A text field
          array(
            'id'    => 'counter_number',
            'type'  => 'text',
            'title' => 'Count Number',
          ),
          // A text field
          array(
            'id'    => 'counter_icon',
            'type'  => 'icon',
            'title' => 'Count Icon',
          ),

        )
      )

    )
  ));

  //
  // =======Create CTA section=======
  CSF::createSection($prefix, array(
    'title'  => 'CTA Section',
    'id' => 'cta_section',
    'icon' => 'fas fa-address-card'
  ));
  //Create a CTA sub section
  CSF::createSection($prefix, array(
    'title'  => 'CTA',
    'parent' => 'cta_section',
    'icon' => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'    => 'cta-switcher',
        'type'  => 'switcher',
        'title' => 'CTA Fields Show?',
        'default' => true,
      ),
      // A text field
      array(
        'id'    => 'cta_title',
        'type'  => 'text',
        'title' => 'Title',
        'dependency' => array('cta-switcher', '==', 'true'),
      ),

      // A text field
      array(
        'id'    => 'cta_desc',
        'type'  => 'textarea',
        'title' => 'Description',
        'dependency' => array('cta-switcher', '==', 'true'),
      ),
      // A text field
      array(
        'id'    => 'button_text',
        'type'  => 'text',
        'title' => 'Button Label',
        'dependency' => array('cta-switcher', '==', 'true'),
      ),
      // A text field
      array(
        'id'    => 'button_link',
        'type'  => 'text',
        'title' => 'Button link',
        'dependency' => array('cta-switcher', '==', 'true'),
      ),

    )
  ));
  //
  // =======Create Fotter section=======
  CSF::createSection($prefix, array(
    'title'  => 'Footer Section',
    'id' => 'footer_section',
    'icon' => 'fas fa-address-card'
  ));
  //Create a Fotter sub section for copyright
  CSF::createSection($prefix, array(
    'title'  => 'Footer Copyright',
    'parent' => 'footer_section',
    'icon' => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'    => 'copy-switcher',
        'type'  => 'switcher',
        'title' => 'Footer Copyright Fields Show?',
        'default' => true,
      ),
      // A text field
      array(
        'id'    => 'copyright_title',
        'type'  => 'text',
        'title' => 'Copyright Title',
        'dependency' => array('copy-switcher', '==', 'true'),
      ),

    )
  ));
  //
  // Create a Fotter sub section for Social Icons
  CSF::createSection($prefix, array(
    'title'  => 'Social Icons',
    'parent' => 'footer_section',
    'icon' => 'fas fa-arrow-right',
    'type' => 'group',
    'fields' => array(
      array(
        'id'    => 'f-s-switcher',
        'type'  => 'switcher',
        'title' => 'Footer Social Field Show?',
        'default' => true,
      ),
      array(
        'id'        => 'f-social_links',
        'type'      => 'group',
        'title'     => 'Social link',
        'dependency' => array('f-s-switcher', '==', 'true'),
        'fields'    => array(

          // A textarea field
          array(
            'id'    => 'f_social_link',
            'type'  => 'text',
            'title' => 'Add Social Link',
          ),

          // A textarea field
          array(
            'id'    => 'f_social_icon',
            'type'  => 'icon',
            'title' => 'Add Social Icon',
          ),

        )
      ),

      array(
        'id'          => 'f-opt-select',
        'type'        => 'select',
        'title'       => 'Select Link Target',
        'dependency' => array('f-s-switcher', '==', 'true'),
        'placeholder' => 'Select an option',
        'options'     => array(
          '_self'  => 'Open In Same Tab',
          '_blank'  => 'Open In New Tab',
        ),
        'default'     => '_self'
      ),


    )
  ));
}
