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
                    <div class="tab-content p-3 border bg-light" id="nav-tabContent">
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
    <script>
        // add new field
        $(document).on('click','.field-btn', function(e){
            e.preventDefault();
            var fieldType = $(this).data('field-type');
            formGenerate(fieldType);
            $('.nav-link').removeClass('active')
            $('.tab-pane .fade').removeClass('active').removeClass('show')
            $('#edit-field').addClass('active show')
            $('.add_field').addClass('d-none')
            $('.attr-prop').addClass('d-none')
            $('.attr-prop').first().removeClass('d-none');
            $('.edit_field').removeClass('d-none')
            $('.nav-link').attr('aria-selected', false);
            $('#edit-field').addClass('active')
            $('#edit-field').attr('aria-selected', true);
        })
        // on mouse click active elements
        $(document).on('click','.alert_box', function(e){
            elementId =$(this).data('element');
            console.log(elementId);
            $('.alert_box').removeClass('active-elements')
            $('.alert_box').removeClass('alert-box-hover')
            $('.action-elements').addClass('d-none')
            $(this).addClass('active-elements')
            $(this).find('.alert_box').addClass('action-elements')
            $(this).find('.action-elements').removeClass('d-none')
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
            $(this).closest('.alert_box').remove()
            //reserialize after delete
            var sl = 0;
            $('.element').addClass(function (i) {
                return 'element_' + (++sl);
            });
        })
        $(document).on('click', '.nav-link', function (e) {
            $('.nav-link').removeClass('active')
            $(this).addClass('active')
            var data_target = $(this).data('target');
            $('.add_field').addClass('d-none');
            $('.edit_field').addClass('d-none');
            $('.styles').addClass('d-none');
            $('.settings').addClass('d-none');
            $('.'+data_target).removeClass('d-none');
        });
        // form generate function
        function formGenerate(fieldType){
            var fieldElement='';
            var attrProp='';
            $('.element').removeClass('active-elements')
            $('.action-elements').addClass('d-none')
            var unique_class=Math.floor(Math.random() * 100000)
            if(fieldType=='text'){
                fieldElement +=`
                <div data-element="${unique_class}" class="form-group alert_box mb-2 rounded p-3 element element_${unique_class} active-elements alert-box-hover">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <div><label for="description">Description</label></div>
                        <div class="fs-14 pe-2 action-elements"><span class="btn btn-sm btn-success me-1 edit"><i class="fa-solid fa-pen-to-square"></i></span> <span class="btn btn-sm btn-danger delete"><i class="fas fa-trash-alt"></i></span></div>
                    </div>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" id="description" placeholder="Enter description" maxlength="5000">{{ old('description') }}</textarea>
                    @error('description')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                `;
                attrProp+=`<div data-attr-prop="${unique_class}" class="attr-prop attr-prop_${unique_class}">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="required">
                        <label class="form-check-label" for="required"> Required </label>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Label</label>
                        <div class="input-wrap name-attr">
                            <div name="label" placeholder="Label" class="form-control" id="" contenteditable="true">Name</div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Help Text</label>
                        <div class="input-wrap">
                            <input name="description" placeholder="" class="form-control" id="" value="" type="text">
                        </div>
                    </div>
                    <div class="form-group  mb-2">
                        <label for="">Placeholder</label>
                        <div class="input">
                            <input name="placeholder" placeholder="" class="form-control" id="" value="" type="text">
                        </div>
                    </div>
                    <div class="form-group  mb-2">
                        <label for="">Class</label>
                        <div class="input-wrap">
                            <input name="" placeholder="space separated classes" class="form-control" id="" value="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Name</label>
                        <div class="">
                            <input name="name" placeholder="" class="form-control" id="" value="" type="text">
                        </div>
                    </div>
                    <div class="form-group  mb-2">
                        <label for="">Value</label>
                        <div class="input-wrap">
                            <input name="value" placeholder="Value" class="form-control" id="" value="" type="text">
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
        }
    </script>
</body>
</html>