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
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true"><i class="fa-solid fa-plus"></i> Field</button>
                            <!-- <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false"><i class="fa-solid fa-pen-to-square"></i> Field</button> -->
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false"><i class="fa-solid fa-wand-magic-sparkles"></i> Styles</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
                                role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa-solid fa-gear"></i> Settings</button>
                        </div>
                    </nav>
                    <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab">
                            <p><strong>This is some placeholder content the Profile tab's associated
                                    content.</strong>
                                Clicking another tab will toggle the visibility of this one for the next.
                                The tab JavaScript swaps classes to control the content visibility and styling. You
                                can use it with
                                tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <p><strong>This is some placeholder content the Contact tab's associated
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
                    <h5 class="mb-4">Form</h5>
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
        $(document).on('click','.field-btn', function(e){
            e.preventDefault();
            var fieldType = $(this).data('field-type');
            formGenerate(fieldType);
        })

        function formGenerate(fieldType){
            var fieldElement='';
            if(fieldType=='text'){
                fieldElement +=`
                <div class="form-group alert_box mb-2 rounded p-2">
                    <label for="foodDescription">Description</label>
                    <textarea class="form-control @error('foodDescription') is-invalid @enderror" name="foodDescription" rows="3" id="foodDescription" placeholder="Enter Description" maxlength="5000">{{ old('foodDescription') }}</textarea>
                    @error('foodDescription')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>`;
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