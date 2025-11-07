(function ($) {
    "use strict";
    if ($('body').hasClass('post-type-tab')) {

        // do stuff
        let $xaito_tab_layout = $("#xaito_tab_layout");

        $xaito_tab_layout.on("change", function () {

            let layout_type = $(this).val();

            if ("layout_one" == layout_type) {
                $(".cmb2-id-xaito-tab-feature-boxes").show();
            } else {
                $(".cmb2-id-xaito-tab-feature-boxes").hide();
            }

            if ("layout_two" == layout_type) {
                $(".cmb2-id-xaito-tab-layout-two-faq").show();
            } else {
                $(".cmb2-id-xaito-tab-layout-two-faq").hide();
            }


        });



        if ("layout_one" !== xaito_tab_layout.layout) {
            $(".cmb2-id-xaito-tab-feature-boxes").hide();
        }

        if ("layout_two" !== xaito_tab_layout.layout) {
            $(".cmb2-id-xaito-tab-layout-two-faq").hide();
        }

        console.log(xaito_tab_layout.layout);

    }


})(jQuery);