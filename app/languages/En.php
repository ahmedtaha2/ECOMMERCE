<?php
   
    function lang($phrase)
    {
        static $lang = array(
            'HOME'                      => 'Home' ,
            'CATEGORIES'                => 'Categories',
            'ITEMS'                     => 'Items',
            'MEMBERS'                   => 'Members',
            'STATISTICS'                => 'Statistics',
            'LOGS'                      => 'Logs',
            'EDIT MEMBERS'              => 'Edit Members',
            'ADMIN LOGIN'               => 'Admin Login',
            'LOGIN'                     => 'Login',
            'USERNAME'                  => 'UserName',
            'PASSWORD'                  => 'Password',
            'E-MAIL'                    => 'E-mail',
            'FULLNAME'                  => 'FullName',
            'REGISTERED DATE'           => 'Registered Date',
            'CONTROL'                   =>'Control',
            'MANAGE MEMBERS'            =>'Manage Members',
            'ADD MEMBER'                =>'Add Member',
            'ID'                        =>'Id',
            'ADD MEMBERS'               =>'Add Members',
            'ADD'                       =>'Add',
            'LOG OUT'                   =>'Log Out',
            'SAVE'                      =>'Save',
            'CONFORM'                   =>'Conform',
            'PENDING MEMBERS'           =>'Pending Members',
            'TOTAL MEMBERS'             =>'Total Members',
            'TOTAL ITEMS'               =>'Total Items',
            'TOTAL COMMENTS'            =>'Total Comments',
            'LATEST REGISTERED USERS'   =>'Latest Registered Users',
            'LATEST ITEMS'              =>'Latest Items',
            'DASHBOARD'                 =>'Dashboard',
            'SUCCESS TO DO THIS'        => 'Success to do this',
            'FAIL TO DO THIS'           => 'Fail to do this',
            'NAME'                      => 'Name',
            'DESCRIPTION'               => 'Description',
            'ORDERING'                  => 'Ordering',
            'VISIBILITY'                => 'Visibility',
            'ALLOW COMMENT'             => 'Allow Comment',
            'ALLOW ADS'                 => 'Allow Ads',
            'NAME ALREADY TAKEN CHOOSE ANOTHER ONE' =>'Name already taken choose another one',
            'NAME CAN\'T BE EMPTY'      => 'Name can\'t be empty',
            'EMAIL IS NOT VALID'        => 'Email is not valid',
            'EMAIL CAN\'T BE EMPTY'     => 'Email can\'t be empty',
            'ONLY ALPHAPATICAL CHARACTER ARE REQUIRED' => 'Only alphapatical characters are reqiured',
            'FULL NAME CAN\'T BE EMPTY' => 'Full name can\'t be empty',
            'PASSWORD CAN\'T BE EMPTY'  => 'Password can\'t be empty',
            'DESCRIPTION CAN\'T BE EMPTY' => 'Description can\'t be empty',
            'ORDERING CAN\'T BE EMPTY'  => 'Ordering can\'t be empty',
            // categories 
            'MANAGE CATEGORIES'         =>'Manage Categories',
            'ALLOWED'                   =>'Allowed',
            'NOT ALLOWED'               =>'Not Allowed',
            'COMMENT'                   =>'Comment',
            'ADS'                       =>'Ads',
            'EDIT'                      =>'Edit',
            'DELETE'                    =>'Delete',
            'CATEGORY NAME'             =>'Category Name',
            'CATEGORY DESCRIPTION'      =>'Category Describtion',
            'EDIT CATEGORY'             =>'Edit Category',
            // items
            'PRICE'                     =>'Price',
            'COUNTRY'                   =>'Country',
            'STATUS'                    =>'Status',
            'NEW'                       =>'New',
            'USED'                      =>'Used',
            'OLD'                       =>'Old',
            'RATING'                    =>'Rating',
            'PRICE CAN\'T BE EMPTY'     =>'Price Can\'t Be Empty',
            'COUNTRY CAN\'T BE EMPTY'   =>'Country Can\'t Be Empty',
            'STATUS CAN\'T BE EMPTY'    =>'Status Can\'t Be Empty',
            'USER'                      =>'User',
            'CATEGORY'                  =>'Category',
            'MUST CHOOSE A USER'        =>'Must Choose a User',
            'MUST CHOOSE A CATEGORY'    =>'Must Choose a Category',
            'MUST CHOOSE AN IMAGE'      =>'Must Choose An Image',
            'ADD A NEW ITEM'            =>'Add a New Item',
            'MANAGE ITEMS'              =>'Manage Items',
            'ADD DATE'                  =>'Add Date',
            'RATE'                      =>'Rate',
            'EDIT ITEM'                 =>'Edit Item',
            'MADE IN'                   =>'Made IN',
            'STATUS'                    =>'Status',
            'RATING'                    =>'Rating',
            'NEEDED TO BE APPROVED ITEMS'=>'Needed To Be Approved Items',
            'APPROVE ITEMS'             =>'Approve Items',
            'APPROVE'                   =>'Approve',
            'NO ITEMS TO BE APPROVED'   =>'No Items To Be Approved',
            'IMAGE'                     =>'Image',
            'IMAGE IS NOT IN REQUIRED FORMAT' => 'Image Is Not In Required Format',
            /// comments
            'SHOW COMMENTS'             =>'Show Comments',
            'COMMENTS'                  =>'Comments',
            'REMOVE'                    =>'Remove',
            'LATEST COMMENTS'           =>'Latest Comments',
            'ADD YOUR COMMENT'          =>'Add Your Comment',
            'NO COMMENTS'               =>'No Comments',
            /// MAINSHOP
            'SHOP'                      =>'Shop',
            // login
            'TO YOUR ACCOUNT'           =>'To Your Account',
            'REMEMBER ME'               =>'Remeber Me',
            'FORGET PASSWORD'           =>'Forget Password',
            'HAVE NO ACCOUNT'           =>'Have No Account',
            'SIGNUP'                    =>'SignUp',
            '?'                         =>'?',
            //signup
            'TO MAKE AN ACCOUNT'        =>'To Make An Account',
            'HAVE AN ACCOUNT'           =>'Have An Account',
            //WAITNG
            'WAITING FOR ADMIN APPROVEMNET' => 'Waiting For Admin Approvement',
            'PLAY FOR FREE'             =>'Play For Free',
            //member nav
            'HELLO'                     =>'Hello',
            'NEIGHBOUR'                 =>'Neighbour',
            'ADD ITEM'                  =>'Add Item',
            //profile page
            'MY PROFILE'                =>'My Profile',
            'MY INFORMATION'            =>'My Information',
            'MY ADS'                    =>'My Ads',
            'MY COMMENTS'               =>'My Comments',
            //home
            'YOU ARE NOT LOGGED IN'     =>'You Are Not Logged In',
            'ADDED TO CART'             =>'Added To Cart',
            'ADDED TO CART SUCCESSFULLY'=>'Added To Cart Successfully',
            //forget password page
            'DID YOU FORGET YOUR PASSWORD ?'  =>'Did You Forget Your Password ?',
            'ENTER YOUR E-MAIL PLEASE'  =>'Enter Your E-mail Please',
            'NEXT'                      =>'Next',
            'EMAIL DOESN\'T EXIST'      =>'Email Doesn\'t Exist',
            'EMAIL IS NOT VALID'        =>'Email Is Not Valid',
            //add number page 
            'THE NUMBER PLEASE'         =>'The Number Please',
            'ENTER THE NUMBER SENT TO YOUR EMAIL' =>'Enter The Number Sent To Your Email',
            'NUMBER IS WRONG ,TRY AGAIN'=>'Number Is Wrong ,Try Again',
            //new password
            'NEW PASSWORD'              =>'New Password',
            'ENTER THE NEW PASSWORD'    =>'Enter The New Password',
            'PASSWORD HAS BEEN UPDATED' =>'Password Has Been Updated',
            // cart page
            'SHOPPING CART'             =>'Shopping Cart',
            'NUMBER OF ITEMS IN CART'   =>'Number Of Items In Cart',
            'CONTINUE SHOPPING'         =>'Continue Shopping',
            'NO ITEMS IN CART'          =>'No Items In Cart',
            'CARD DETAILS'              =>'Card Details',
            'NAME ON CARD'              =>'Name On Card',
            'CARD NUMBER'               =>'Card Number',
            'SUBTOTAL'                  =>'Subtotal',
            'SHIPPING'                  =>'Shipping',
            'TOTAL'                     =>'Total',
            'CARD TYPE'                 =>'Card Type'
               

        );
        return $lang[$phrase];
    }

