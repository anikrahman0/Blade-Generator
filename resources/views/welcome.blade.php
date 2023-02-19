<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="card p-3 shadow" style="max-width: 600px;">
                    <h5 class="mb-3">Components</h5>
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-target="add_field" id="add-field" type="button" role="tab" aria-controls="add_field" aria-selected="true"><i class="fa-solid fa-plus"></i> Add New Field</button>
                            <button class="nav-link" data-target="edit_field" id="edit-field" type="button" role="tab" aria-controls="edit_field" aria-selected="false"><i class="fa-solid fa-pen-to-square"></i> Edit Field</button>
                            <button class="nav-link" data-target="styles" id="styles-tab" type="button" role="tab" aria-controls="styles" aria-selected="false"><i class="fa-solid fa-wand-magic-sparkles"></i> Styles</button>
                            <button class="nav-link" data-target="settings" id="settings-tab" type="button" role="tab" aria-controls="#settings" aria-selected="false"><i class="fa-solid fa-gear"></i> Settings</button>
                        </div>
                    </nav>
                    <div class="tab-content p-3 border bg-custom rounded" id="nav-tabContent">
                        <div class="add_field" id="add_field" role="tabpanel" aria-labelledby="add-field">
                           <div class="from-group row">
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="text" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-font"></i> Text</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="paragraph" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-paragraph"></i> Paragraph</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="checkboxes" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-square-check"></i> Checkboxes</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="multiple-choice" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-circle-dot"></i> Multiple Choice</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="dropdown" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-circle-chevron-down"></i> Dropdown</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="file-upload" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-cloud-arrow-up"></i> File Upload</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="date" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-calendar-days"></i> Date</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="number" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-1"></i><i class="fa-solid fa-2"></i> Number</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="website" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-globe"></i> Website</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="name" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-user"></i> Name</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="phone" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-phone"></i> Phone</a> </div>
                                <div class="col-md-6 mb-2"> <a href="" data-field-type="email" class="btn btn-success btn-sm d-block text-start field-btn"><i class="fa-solid fa-envelope"></i> Email</a> </div>
                            </div>
                        </div>
                        <div class="edit_field d-none" id="edit_field" role="tabpanel" aria-labelledby="edit_field">
                            <div class="form-elements"></div>
                        </div>
                        <div class="styles d-none" id="styles" role="tabpanel"
                            aria-labelledby="styles">
                            <p><strong>This is some placeholder content styles
                                    tab.</strong>
                                Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling. You
                                can use it with
                                tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                        </div>
                        <div class="settings d-none" id="settings" role="tabpanel"
                            aria-labelledby="settings">
                            <p><strong>This is some placeholder settings
                                    content.</strong>
                                Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling. You
                                can use it with
                                tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card p-3 shadow">
                    <h5 class="">Form</h5>
                    <div class="form menu_list js-sortable-group" id="form"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/custom-js.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script>
        let target_add_field = $('.nav-link[data-target="add_field"]');
        // add new field
        $(document).on('click','.field-btn', function(e){
            e.preventDefault();
            var fieldType = $(this).data('field-type');
            formGenerate(fieldType);
            activeEditField()
        })
        // on mouse click active elements
        $(document).on('click','.alert_box', function(e){
            activeEditField()
            elementId =$(this).data('element');
            $(this).addClass('active-elements').siblings().removeClass('active-elements');
            $('.action-elements').addClass('d-none')
            $(this).find('.action-elements').removeClass('d-none')
            $('.alert_box').removeClass('alert-box-hover')
            $('.attr-prop').addClass('d-none')
            $('.attr-prop_'+elementId).removeClass('d-none')
        });
        // on mouseover show action elements
        $(document).on('mouseover','.alert_box', function(e){
            $(this).find('.action-elements').removeClass('d-none')
            $(this).addClass('alert-box-hover')
        });
        //on mousmove hide action elements
        $(document).on('mouseout','.alert_box', function(e){
            let active  = $(this).hasClass('active-elements')
            if(!active){
                $(this).find('.action-elements').addClass('d-none')
                $(this).removeClass('alert-box-hover')
            }
        });
        // delete field
        $(document).on('click','.delete', function(e){
            e.preventDefault();
            e.stopPropagation();
            let elementId = $(this).data('delete-id')
            $(this).closest('.alert_box').remove()
            $('.attr-prop_'+elementId).remove()
            if($('.element').length == 0){
                activeAddNewField(target_add_field)
            }else if($('.element').length > 0 ){
                console.log($('.form').find('active-elements').length > 0)
                if($('.form').find('.active-elements').length == 0){
                    $('.element').first().addClass('active-elements')
                    $('.action-elements').first().removeClass('d-none');
                    var attr_element  = $('.element').first().attr('data-element')
                    $('.attr-prop_'+attr_element).removeClass('d-none')
                }else{

                }
            }
        })
        $(document).on('click', '.nav-link', function(){
            activeAddNewField(target_add_field)
        });
        // active add new field
        function activeAddNewField(element){
            $('.nav-link').removeClass('active')
            $(element).addClass('active')
            var data_target = $(element).data('target');
            $('.add_field, .edit_field, .styles, .settings').addClass('d-none');
            $('.'+data_target).removeClass('d-none');
        }
        // active edit field
        function activeEditField(){
            $('.nav-link').removeClass('active')
            $('.nav-link').attr('aria-selected', false);
            $('.tab-pane .fade').removeClass('active show')
            $('#edit-field').addClass('active show')
            $('.edit_field').removeClass('d-none')
            $('#edit-field').addClass('active')
            $('#edit-field').attr('aria-selected', true);
            $('.add_field, .attr-prop').addClass('d-none')
            $('.attr-prop').first().removeClass('d-none');
        }
        // form generate function
        function formGenerate(fieldType){
            var fieldElement='';
            var attrProp='';
            $('.element').removeClass('active-elements')
            console.log('i am a  problem from generate')
            $('.action-elements').addClass('d-none')
            var unique_class=Math.floor(Math.random() * 100000)
            if(fieldType=='text'){
                fieldElement +=`
                <div data-element="${unique_class}" class="form-group alert_box mb-2 rounded p-3 element element_${unique_class} active-elements alert-box-hover">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <div><label for="description">Your Label</label></div>
                        <div class="fs-14 pe-2 action-elements"><span data-delete-id="${unique_class}" class="btn btn-sm btn-danger delete"><i class="fas fa-trash-alt"></i></span></div>
                    </div>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="" rows="3" cols="4" id="" placeholder="Enter your placeholder text" maxlength="1000">{{ old('description') }}</textarea>
                    <span class="help-text text-success small">* your help text here</span>
                    @error('description')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                `;
                attrProp+=`<div data-attr-prop="${unique_class}" class="attr-prop attr-prop_${unique_class}">
                    <div class="form-check mb-2">
                        <input data-required-id="${unique_class}" class="form-check-input required-prop" type="checkbox" value="" id="required">
                        <label class="form-check-label" for="required"> Required </label>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Label</label>
                        <div class="input-wrap name-attr">
                            <input data-label-id="${unique_class}" class="form-control label-prop" id="" value="Your Label" type="text">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Name</label>
                        <div class="">
                            <input data-name-id="${unique_class}" class="form-control name-prop" value="" type="text">
                        </div>
                    </div>
                     <div class="form-group mb-2">
                        <label for="">Maxlength</label>
                        <div class="input-wrap">
                            <input data-maxlength-id="${unique_class}" class="form-control maxlength-prop" value="1000" type="text">
                        </div>
                    </div>
                    <div class="form-group  mb-2">
                        <label for="">Placeholder</label>
                        <div class="input">
                            <input data-placeholder-id="${unique_class}" class="form-control placeholder-prop" id="" value="Enter your placeholder text" type="text">
                        </div>
                    </div>
                    <div class="form-group  mb-2">
                        <label for="">Class</label>
                        <div class="input-wrap">
                            <input data-class-id="${unique_class}" class="form-control class-prop" value="form-control" type="text">
                        </div>
                    </div>
                     <div class="form-group  mb-2">
                        <label for="">ID</label>
                        <div class="input-wrap">
                            <input data-attr-id="${unique_class}" class="form-control id-prop" type="text">
                        </div>
                    </div>
                     <div class="form-group  mb-2">
                        <label for="">Rows</label>
                        <div class="input-wrap">
                            <input data-rows-id="${unique_class}" class="form-control rows-prop" value="3" type="text">
                        </div>
                    </div>
                     <div class="form-group  mb-2">
                        <label for="">Cols</label>
                        <div class="input-wrap">
                            <input data-cols-id="${unique_class}" class="form-control cols-prop" value="4" type="text">
                        </div>
                    </div>
                     <div class="form-group mb-2">
                        <label for="">Help Text</label>
                        <div class="input-wrap">
                            <input data-help-id="${unique_class}" class="form-control help-prop" value="Enter help text" type="text">
                        </div>
                    </div>
                </div>`
            } else if (fieldType == 'paragraph'){

            } else if (fieldType == 'checkboxes') {

            } else if (fieldType == 'multiple-choice') {

            } else if (fieldType == 'dropdown') {

            } else if (fieldType == 'file-upload') {

            } else if (fieldType == 'date') {

            } else if (fieldType == 'number') {

            } else if (fieldType == 'website') {

            } else if (fieldType == 'name') {

            } else if (fieldType == 'phone') {

            } else if (fieldType == 'email') {

            }else{
                console.log('something went wrong')
            }
            $('#form').prepend(fieldElement);
            $('.form-elements').prepend(attrProp);
            $(document).on('click','.required-prop', function(){
                var elementID = $(this).data('required-id')
                if ($(this).is(':checked')) {
                    $('.element_'+elementID).find('textarea').prop('required', true);
                }else{
                    $('.element_'+elementID).find('textarea').prop('required', false);
                }
            })
            // $(document).on('input','.label-prop', function(){
            //     console.log('hejej');
            //     var elementID = $(this).data('label-id')
            //     let value  = $(this).val();
            //     console.log(elementID+ value)
            //     $('.element_'+elementID).find('label').text(value);
            // })
            $(document).on('input', '.label-prop', _.throttle(function() {
                var elementID = $(this).data('label-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('label').text(value);
            }, 300));
            $(document).on('input', '.maxlength-prop', _.throttle(function() {
                 var elementID = $(this).data('maxlength-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('maxlength',value);
            }, 300));
            $(document).on('input', '.placeholder-prop', _.throttle(function() {
                var elementID = $(this).data('placeholder-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('placeholder',value);
            }, 300));
            $(document).on('input', '.name-prop', _.throttle(function() {
                var elementID = $(this).data('name-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('name',value);
            }, 300));
            $(document).on('input', '.class-prop', _.throttle(function() {
                var elementID = $(this).data('class-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('class',value);
            }, 300));
            $(document).on('input', '.id-prop', _.throttle(function() {
                var elementID = $(this).data('attr-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('id',value);
            }, 300));
            $(document).on('input', '.rows-prop', _.throttle(function() {
                var elementID = $(this).data('rows-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('rows',value);
            }, 300));
            $(document).on('input', '.cols-prop', _.throttle(function() {
                var elementID = $(this).data('cols-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('textarea').prop('cols',value);
            }, 300));
            $(document).on('input', '.help-prop', _.throttle(function() {
                var elementID = $(this).data('help-id')
                let value  = $(this).val();
                console.log(elementID+ value)
                $('.element_'+elementID).find('.help-text').text(value);
            }, 300));
        }
    </script>
</body>
</html>