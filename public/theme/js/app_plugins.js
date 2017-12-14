"use strict";

var app_plugins = {
    checkbox_radio: function(){
        if($(".app-checkbox").length > 0 || $(".app-radio").length > 0){            
            $(".app-checkbox label, .app-radio label").each(function(){
                $(this).append("<span></span>");
            });
        }
    },
    switch_button: function(){
        
        if($(".switch").length > 0){
            $(".switch").each(function(){
                $(this).append("<span></span>");
            });
        }
        
    },
    isotope: function(){
        if($(".grid").length === 0) return false;            
            
        var $grid = $(".grid").isotope({
            itemSelector: ".grid-element",
            layoutMode: "fitRows",
            percentPosition: true
        });

        $("button[data-filter]").on("click", function() {
            var filter = $(this).attr("data-filter");                    
            $grid.isotope({filter: filter});

            $(this).parents(".btn-group").find(".btn-primary").removeClass("btn-primary").addClass("btn-default");
            $(this).removeClass("btn-default").addClass("btn-primary");
        });

        $(window).resize(function(){
            setTimeout(function(){
                $grid.isotope('layout');
                
                app.accordionFullHeightResize();
                app.features.gallery.controlHeight();
                app.spy();
            },100);                    
        });                
    },
    formSpinner: function(){
        
        if($("input.spinner").length > 0){
            
            $("input.spinner").each(function(){
                $(this).wrap("<div class=\"spinner-wrapper\"></div>");
                $(this).after("<button class=\"spinner-button-up\"><span class=\"fa fa-angle-up\"></span></button>");
                $(this).after("<button class=\"spinner-button-down\"><span class=\"fa fa-angle-down\"></span></button>");                                                
            });                        
                                                    
            $(".spinner-button-up").on("click", function(){

                var input       = $(this).parent(".spinner-wrapper").find("input"),    
                    spinMax     = input.attr("data-spinner-max") ? parseFloat(input.data("spinner-max")) : false,
                    spinMin     = input.attr("data-spinner-min") ? parseFloat(input.data("spinner-min")) : false,
                    spinStep    = input.attr("data-spinner-step") ? parseFloat(input.data("spinner-step")) : 1,
                    val         = parseFloat(input.val()) + spinStep;                   
                    
                if(typeof spinMax !== 'undefined' && spinMax !== false){
                    if(val > spinMax) return false;
                }
                if(typeof spinMin !== 'undefined' && spinMin !== false){
                    if(val < spinMin) return false;
                }

                input.val(val);

                return false;
            });

            $(".spinner-button-down").on("click", function(){

                var input       = $(this).parent(".spinner-wrapper").find("input"),
                    spinMax     = input.attr("data-spinner-max") ? parseFloat(input.data("spinner-max")) : false,
                    spinMin     = input.attr("data-spinner-min") ? parseFloat(input.data("spinner-min")) : false,
                    spinStep    = input.attr("data-spinner-step") ? parseFloat(input.data("spinner-step")) : 1,
                    val         = parseFloat(input.val()) - spinStep;

                if(typeof spinMax !== 'undefined' && spinMax !== false){
                    if(val > spinMax) return false;
                }
                if(typeof spinMin !== 'undefined' && spinMin !== false){
                    if(val < spinMin) return false;
                }

                input.val(val);

                return false;
            });            
            
        }
        
    },
    customScrollBar: function(){
        if($(".scroll").length > 0)
            $(".scroll").mCustomScrollbar({axis:"y", autoHideScrollbar: true, scrollInertia: 200, advanced: {autoScrollOnFocus: false}});
    },    
    bootstrap_select: function(){       
        if($(".bs-select").length > 0)
           $(".bs-select").selectpicker({iconBase: '', tickIcon: 'fa fa-check'});              
    },
    select2: function(){
        if($(".s2-select").length > 0){
           $(".s2-select").select2({minimumResultsForSearch: Infinity});
        }
        if($(".s2-select-search").length > 0){
           $(".s2-select-search").select2();
        }
        if($(".s2-select-tags").length > 0){
           $(".s2-select-tags").select2({tags: true});
        }
    },
    bootstrap_daterange: function(){
        if($(".daterange").length > 0){
            $("input.daterange").daterangepicker();
        }
        if($(".datetimerange").length > 0){
            $('input.datetimerange').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                }
            });
        }
    },
    bootstrap_datepicker: function(){
       
       /* in case of update datepicker 
        * icons
        *   time: "icon-clock2",
            date: "icon-calendar-full",
            up: "icon-chevron-up",
            down: "icon-chevron-down",                    
            previous: 'icon-chevron-left',
            next: 'icon-chevron-right',
            today: 'icon-calendar-insert',
            clear: 'icon-trash2',
            close: 'icon-cross'
        * 
        */
        if($(".bs-datepicker").length > 0){
            $(".bs-datepicker").datetimepicker({format: "DD/MM/YYYY"});
        }
        
        if($(".bs-datetimepicker").length > 0){
            $(".bs-datetimepicker").datetimepicker();
        }
        if($(".bs-timepicker").length > 0){
            $(".bs-timepicker").datetimepicker({format: "LT"});
        }
        
        if($(".bs-datepicker-weekends").length > 0){
            $(".bs-datepicker-weekends").datetimepicker({format: "DD/MM/YYYY", daysOfWeekDisabled: [0, 6]});
        }
        
        if($(".bs-datepicker-inline").length > 0){
            $(".bs-datepicker-inline").datetimepicker({
                inline: true                
            });
        }
        
        if($(".bs-datepicker-inline-time").length > 0){
            $(".bs-datepicker-inline-time").datetimepicker({
                inline: true,
                 sideBySide: true
            });
        }
        
        if($(".bs-datepicker-inline-years").length > 0){
            $(".bs-datepicker-inline-years").datetimepicker({
                inline: true,
                viewMode: 'years'
            });
        }
    },
    bootstrap_popover: function(){
        $("[data-toggle='popover']").popover();
        
        $(".popover-hover").on("mouseenter",function(){             
            $(this).popover('show');
        }).on("mouseleave",function(){
            $(this).popover('hide');
        });
                
        $(".modal").on("show.bs.modal", function () {
            $("[data-toggle='popover']").popover("hide");
        });
    },
    bootstrap_tooltip: function(){        
        $("[data-toggle='tooltip']").tooltip();        
    },    
    maskedInput: function(){
        if($("input[class^='mask_']").length > 0){
            $("input.mask_tin").mask('99-9999999');
            $("input.mask_ssn").mask('999-99-9999');        
            $("input.mask_date").mask('9999-99-99');
            $("input.mask_date_rev").mask('99-99-9999');
            $("input.mask_product").mask('a*-999-a999');
            $("input.mask_phone").mask('99 (999) 999-99-99');
            $("input.mask_phone_ext").mask('99 (999) 999-9999? x99999');
            $("input.mask_credit").mask('9999-9999-9999-9999');        
            $("input.mask_percent").mask('99%');            
        }
    },
    noty: function(){
        
        $(".notify").on("click",function(){
            
            noty({
                text: $(this).data("notify"),
                type: $(this).data("notify-type"),
                layout: $(this).data("notify-layout") ? $(this).data("notify-layout") : 'topRight',
                animation: {
                    open: 'animated bounceIn',
                    close: 'animated fadeOut',                    
                    speed: 200
                }
            });
            
        });
        
    },
    datatables: function(){
        
        if($(".datatable-basic").length > 0){
            $(".datatable-basic").DataTable({
                searching: false,
                paging: false,
                info: false
            });
        }
        
        if($(".datatable-extended").length > 0){
            $(".datatable-extended").DataTable();
        }
        
    },
    knob: function(){
        if($(".knob").length > 0){
            $(".knob").knob({
                'format' : function (value) {
                   return value + '%';
                }
            });
        }
    },
    sparkline: function(){
        if($(".sparkline").length > 0)
            $(".sparkline").sparkline('html', { enableTagOptions: true,disableHiddenCheck: true});   
    },
    wizard: function(){
        
        if($(".wizard").length > 0){

            //check count of steps in each wizard
            $(".wizard > ul").each(function(){
                $(this).addClass("steps_"+$(this).children("li").length);
            });// ./end                                    
            
            // init wizard plugin
            $(".wizard").smartWizard({
                // This part (using for wizard validation) of code can be removed FROM 
                onLeaveStep: function(obj){
                    var wizard = obj.parents(".wizard");

                    if(wizard.hasClass("wizard-validation")){

                        var valid = true;

                        $('input,textarea',$(obj.attr("href"))).each(function(i,v){
                            valid = validate.element(v) && valid;
                        });

                        if(!valid){
                            wizard.find(".stepContainer").removeAttr("style");
                            validate.focusInvalid();                                
                            return false;
                        }         
                    }    

                    app.spy();

                    return true;
                },// <-- TO
                //this is important part of wizard init
                onShowStep: function(obj){
                    var wizard = obj.parents(".wizard");

                    if(wizard.hasClass("show-submit")){

                        var step_num = obj.attr('rel');
                        var step_max = obj.parents(".anchor").find("li").length;

                        if(step_num == step_max){                             
                            obj.parents(".wizard").find(".actionBar .btn-primary").css("display","block");
                        }                         
                    }
                    
                    app.spy();
                    
                    return true;                         
                }// ./end
            });                        
        }            

    },
    multiselect: function(){
        if($(".multiselect").length > 0){
            $(".multiselect").multiSelect({
                afterInit: function(){
                    var self = this;
                    self.$container.addClass("row");
                    self.$container.find(".ms-selectable, .ms-selection").addClass("col-xs-6");
                }
            });
        }
    },
    bootstrap_colorpicker: function(){
        
        if($(".bs-colorpicker").length > 0){
            $(".bs-colorpicker").colorpicker({                
                sliders: {
                    saturation: {maxLeft: 150,maxTop: 150},
                    hue: {maxTop: 150},
                    alpha: {maxTop: 150}
                }
            });
        }
        if($(".bs-colorpicker-lg").length > 0){
            $(".bs-colorpicker-lg").colorpicker({
                customClass: 'colorpicker-2x',
                sliders: {
                    saturation: {maxLeft: 250,maxTop: 250},
                    hue: {maxTop: 250},
                    alpha: {maxTop: 250}
                }
            });
        }
        
        
    },
    loaded: function(){
        app_plugins.customScrollBar();
        app_plugins.checkbox_radio();
        app_plugins.formSpinner();
        app_plugins.switch_button();
        app_plugins.bootstrap_select();
        app_plugins.select2();
        app_plugins.bootstrap_popover();
        app_plugins.bootstrap_datepicker();
        app_plugins.bootstrap_tooltip();
        app_plugins.maskedInput();
        app_plugins.datatables();
        app_plugins.knob();

        app_plugins.sparkline();
        
        app_plugins.isotope();

        app_plugins.noty();
        app_plugins.wizard();
        app_plugins.bootstrap_daterange();
        
        app_plugins.multiselect();
        app_plugins.bootstrap_colorpicker();
    }
};

$(function(){
    app_plugins.loaded();
});

$(document).ready(function(){
    app.loaded();
});