$(document).ready(function() {

    const add_student_btn = $('#add-student');
    const add_student_modal = $('#add-student-modal');

    add_student_btn.click(function() {
        add_student_modal.removeClass('hidden');
    });
    
    const cancel_add_student = $('#cancel');

    cancel_add_student.click(function() {
        add_student_modal.addClass('hidden');
        $('#student-form')[0].reset();
    });

    if ($("#student-form").length > 0) {
        $("#student-form").validate({
            rules: {
                first_name: "required",
                last_name: "required",
                middle_name: "required",
                sex: "required",
                lrn: {
                required: true,
                pattern: /^\d{9}$/
                },
                dob: "required",
                address: "required",
                email: {
                    required: true,
                    email: true
                },
                parent_first_name: "required",
                parent_last_name: "required",
                parent_middle_name: "required",
                parent_sex: "required",
            },
            messages: {
                first_name: "Please enter the first name",
                last_name: "Please enter the last name",
                middle_name: "Please enter the middle name",
                sex: "Please select a gender",
                lrn: {
                required: "Please enter the LRN",
                pattern: "LRN should be a 9-digit number"
                },
                dob: "Please enter your date of birth",
                address: "Please enter the address",
                email: {
                    required: "Please enter an email",
                    email: 'Please use a valid email'
                },
                parent_first_name: "Please enter the first name",
                parent_last_name: "Please enter the last name",
                parent_middle_name: "Please enter the middle name",
                parent_sex: "Please select a gender",
            },

            errorPlacement: function(error, element) {
                error.appendTo(element.closest('div').find('span'));
            },
            success: function(label) {
                label.closest('div').find('span').empty();
            },

            submitHandler: function(form) {
                var $saveBtn = $('#student-form button[type="submit"]');
                $saveBtn.text('Saving...');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = new FormData(form);
                $.ajax({
                    url: '/students/register', type: 'POST', data: formData, processData: false, contentType: false,
                    success: function(response) {
                        var message;
                        if (response.success) {
                            message =  $('<div class="fixed top-3 rounded left-1/2 transform -translate-x-1/2 bg-green-100 px-20 py-3"><p class="poppins text-lg text-green-800 ">' + response.message + '</p></div>');
                            $('#student-form')[0].reset();
                            fetch_students_data();
                            
                        } else {
                            message = $('<div class="fixed top-3 rounded left-1/2 transform -translate-x-1/2 bg-green-100 px-20 py-3"><p class="poppins text-lg text-green-800 ">' + response.message + '</p></div>');   
                        }

                        $('#container').append(message);

                        setTimeout(function(){
                            message.fadeOut('slow', function() {
                                message.remove();
                            });
                        }, 3000);

                        $saveBtn.text('Save');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log('Error:', errorThrown);
                        $saveBtn.text('Save');
                    }
                });
            }
        });
    }

    fetch_students_data();

    function fetch_students_data(query = '') {
        $.ajax({
            url:"/students/search",
            method:'GET',
            data:{query: query},
            dataType:'json',
            success:function(data)
            {
                $('#students-container').html(data.student_data);

                // $('.addstudentbtn').on('click', function() {
                //     const addBtn = $(this);
                //     addBtn.text('adding..');
                //     var student_id = $(this).attr('id');
                //     var section_id =  $('.get-id').attr('id');
                //     sec = section_id;
                    
                //     $.ajax({
                //         url: "/sections/students/save",
                //         method: "POST",
                //         data: {
                //             section_id: section_id,
                //             student_id: student_id,
                //             _token: csrf_token
                //         },
                //         success: function(response) {
                //             var message;
                //             if (response.success) {
                //                 addBtn.text('added');
                //                 fetch_section_students(sec);
                                
                //             } else {
                //                 message = $('<div class="fixed top-3 rounded left-1/2 transform -translate-x-1/2 bg-red-100 px-20 py-3"><p class="poppins text-lg text-red-800 ">' + response.message + '</p></div>');   
                //                 $('#container').append(message);
    
                //                 setTimeout(function(){
                //                     message.fadeOut('slow', function() {
                //                         message.remove();
                //                     });
                //                 }, 3000);

                //                 addBtn.text('add');
                //             }
    
                //         },
                //         error: function(xhr) {
                //             addBtn.text('error');
                //         }
                //     });
                
                // });
            }
        });
    }

    $('#search-student').on('keyup', function(){
        var query = $(this).val();
        fetch_students_data(query);
    }); 
});

