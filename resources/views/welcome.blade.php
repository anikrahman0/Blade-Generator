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
            <div class="col-md-4">
                <div class="card p-3 shadow" style="max-width: 600px;">
                    <h5 class="mb-4">Components</h5>
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="add-field" data-bs-toggle="tab"
                                data-bs-target="#add_field" type="button" role="tab" aria-controls="add_field"
                                aria-selected="true"><i class="fa-solid fa-plus"></i> Field</button>
                            <button class="nav-link" id="edit-field" data-bs-toggle="tab"
                                data-bs-target="#edit_field" type="button" role="tab" aria-controls="edit_field"
                                aria-selected="false"><i class="fa-solid fa-pen-to-square"></i> Field</button>
                            <button class="nav-link" id="styles-tab" data-bs-toggle="tab"
                                data-bs-target="#styles" type="button" role="tab" aria-controls="styles"
                                aria-selected="false"><i class="fa-solid fa-wand-magic-sparkles"></i> Styles</button>
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
                                role="tab" aria-controls="#settings" aria-selected="false"><i class="fa-solid fa-gear"></i> Settings</button>
                        </div>
                    </nav>
                    <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="add_field" role="tabpanel" aria-labelledby="add-field">
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
                        <div class="tab-pane fade" id="edit_field" role="tabpanel" aria-labelledby="edit_field">
                            <div class="form-elements">
                                <div class="form-group required-wrap"><label for="required-frmb-1670219737654-fld-1">Required</label>
                                    <div class="input-wrap"><input type="checkbox" class="fld-required" name="required"
                                            id="required-frmb-1670219737654-fld-1"></div>
                                </div>
                                <div class="form-group label-wrap" style="display: block"><label for="label-frmb-1670219737654-fld-1">Label</label>
                                    <div class="input-wrap">
                                        <div name="label" placeholder="Label" class="fld-label form-control" id="label-frmb-1670219737654-fld-1"
                                            contenteditable="true">Name</div>
                                    </div>
                                </div>
                                <div class="form-group description-wrap" style="display: block"><label
                                        for="description-frmb-1670219737654-fld-1">Help Text</label>
                                    <div class="input-wrap"><input name="description" placeholder="" class="fld-description form-control"
                                            id="description-frmb-1670219737654-fld-1" value="" type="text"></div>
                                </div>
                                <div class="form-group placeholder-wrap" style="display: block"><label
                                        for="placeholder-frmb-1670219737654-fld-1">Placeholder</label>
                                    <div class="input-wrap"><input name="placeholder" placeholder="" class="fld-placeholder form-control"
                                            id="placeholder-frmb-1670219737654-fld-1" value="" type="text"></div>
                                </div>
                                <div class="form-group className-wrap" style="display: block"><label
                                        for="className-frmb-1670219737654-fld-1">Class</label>
                                    <div class="input-wrap"><input name="className" placeholder="space separated classes"
                                            class="fld-className form-control" id="className-frmb-1670219737654-fld-1" value="form-control"
                                            type="text"></div>
                                </div>
                                <div class="form-group name-wrap" style="display: block"><label for="name-frmb-1670219737654-fld-1">Name</label>
                                    <div class="input-wrap"><input name="name" placeholder="" class="fld-name form-control"
                                            id="name-frmb-1670219737654-fld-1" value="date-1670219742959-0" type="text"></div>
                                </div>
                                <div class="form-group value-wrap" style="display: undefined"><label
                                        for="value-frmb-1670219737654-fld-1">Value</label>
                                    <div class="input-wrap"><input name="value" placeholder="Value" class="fld-value form-control"
                                            id="value-frmb-1670219737654-fld-1" value="" type="text"></div>
                                </div><a class="close-field">Close</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="styles" role="tabpanel"
                            aria-labelledby="styles">
                            <p><strong>This is some placeholder content styles
                                    tab.</strong>
                                Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling. You
                                can use it with
                                tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                        </div>
                        <div class="tab-pane fade" id="settings" role="tabpanel"
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
            <div class="col-md-8">
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
        })
        // on mouse click active elements
        $(document).on('click','.alert_box', function(e){
            $('.alert_box').removeClass('active-elements')
            $('.alert_box').removeClass('alert-box-hover')
            $('.action-elements').addClass('d-none')
            $(this).addClass('active-elements')
            $(this).find('.alert_box').addClass('action-elements')
            $(this).find('.action-elements').removeClass('d-none')
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
        })

        function formGenerate(fieldType){
            var fieldElement='';
            if(fieldType=='text'){
                fieldElement +=`
                <div class="form-group alert_box mb-2 rounded p-3">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <div><label for="description">Description</label></div>
                        <div class="fs-14 pe-2 action-elements d-none"><span class="btn btn-sm btn-success me-1 edit"><i class="fa-solid fa-pen-to-square"></i></span> <span class="btn btn-sm btn-danger delete"><i class="fas fa-trash-alt"></i></span></div>
                    </div>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3" id="description" placeholder="Enter description" maxlength="5000">{{ old('description') }}</textarea>
                    @error('description')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                `;
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
            $('#form').append(fieldElement);
        }
    </script>
</body>
</html>