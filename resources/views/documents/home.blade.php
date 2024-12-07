<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
</head>
<body>
    <a href="{{ url("/") }}" class="btn btn-danger btn-sm m-4"><i class="fa-solid fa-circle-arrow-left"></i> Back To Home</a>
    <h2 class="text-center m-3 text-success"> "E-Commerce For Creative Coder Myanmar Project Test Documentation"</h2>
    <!-- Table -->
    <table class="table table-bordered m-3 ml-3 me-3 ">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr id="tr-id-1" class="tr-class-1">
                <td id="td-id-1" class="td-class-1 text-warning">
                     Project Name
                </td>
                <td class="text-warning">
                   Ecommerce  Website (" Only For CCM ")
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                     Project Description
                </td>
                <td class="text-warning">
                   E-Commerce Website
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                     Project Function
                </td>
                <td class="text-warning">
                    <p>Features</p>
                   <ul>
                        <li>Admin can do feature.</li>
                            <ul>
                                <li>I do customer custom login & Register.</li>
                                <li>Multiple authentication can be done.</li>
                                <li>User Side Templates are packaged separately.</li>
                                <li>Admin Side Templates are packaged separately.</li>
                                <li>Admin created add category from Admin Panel.</li>
                                <li>Admin do create,view,edit,delete category from Admin Panel.</li>
                                <li>When Admin Delete, Sweet Alert will appear.</li>
                                <li>Whenever CRUD is done, a Toastr message will appear.</li>
                                <li>Admin created add product from Admin Panel.</li>
                                <li>Admin do create,view,edit,delete category from Admin Panel.</li>
                                <li>When Admin Delete, Sweet Alert will appear.</li>
                                <li>Whenever CRUD is done, a Toastr message will appear.</li>
                                <li>In Admin Panel, The text in the description column has been changed to shorthand.</li>
                                <li>We also made it possible to search for products. (Search Box)</li>
                                <li>Admin can do admin side product create and user view show this product.</li>
                                <li>Admin can list the data and print the pdf.</li>
                                <li>The total count is displayed on the admin dashboard.</li>
                                <li>Admin can change order status in admin panel.</li>
                                <li> I did Pagination for each index page.</li>
                                <li>I has done Email Verification using mailtrap.</li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li>User can do features</li>
                        <ul>
                                <li>User can each view pages</li>
                                <li>User can view products.</li>
                                <li>User Can add in cart .</li>
                                <li>If the user does not like the product in the shopping cart. It can be cancelled.</li>
                                <li>User can see the total amount of products selected by the user in the cart icon.</li>
                                <li>Users can see the total price when they click on the cart.</li>
                                <li>Users can remove the product from the cart if they don't like it.</li>
                                <li>User data must be provided if the user orders the product.(remark : )</li>
                                <li>User Can do Forgot and Reset Password  using Gmail.</li>
                        </ul>
                    </ul>
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                     Developer Name
                </td>
                <td class="text-warning">
                   Mg Aung Zaw Moe
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                    Developer Contact
                </td>
                <td class="text-warning">
                  09-769000788
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                    Project Time (Project DeadLine  )
                </td>
                <td class="text-warning">
                   26.10.24 - 26.11.24 (30 days)
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                     Design Usage
                </td>
                <td class="text-warning">
                   Frontend - yaminshakil User Template<br>
                   Custom   - Boostrap, Css, Javascript, Tailwind <br>
                   Backend - Elegant Admin Template (themeforest.net)<br>
                   Responsive(mobile tablet and pc views)
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1  text-warning">
                    Programming Framework and Language
                </td>
                <td class="text-warning">
                    -<a href="https://laravel.com/docs/11.x"> Laravel Version 11</a> <br>
                   -<a href="https://www.php.net/releases/8.3/en.php"> PHP Version 8.3</a>
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning ">
                     Pakage Usage
                </td>
                <td class="text-warning">
                   - Laravel Breeze <br>
                   - Stripe Payment
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                     Plugin Usage
                </td>
                <td class="text-warning">
                    - Temp Mail<br>
                    - MailTrap System<br>
                    - Toastr Js Notification System<br>
                    - Sweet Alert System<br>
                   - Bootstrap Datetime Picker<br>
                   - Customer Alert System<br>
                   - Tinymce Editor 5 <br>
                   - font-awesome
                </td>
            </tr>
            <tr id="tr-id-2" class="tr-class-1">
                <td id="td-id-2" class="td-class-1 text-warning">
                    Error Check
                </td>
                <td class="text-warning">
                   Checked and All are valid
                </td>
            </tr>

        </tbody>
    </table>
    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

