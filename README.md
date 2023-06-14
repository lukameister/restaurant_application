# Restaurant Application

This is a restaurant application built using the Laravel framework. It allows users to view restaurant menus,
categories, place orders, and make reservations.

## Features

- Admin panel: Administrator accounts have access to an admin panel where they can manage categories, menus, orders,
  tables and reservations.

    - In the categories tab admin is able to add a new category which opens the categories/create.blade page in which
      they are
      able to fill a form in which they can set the category's name and description and add a picture which will later
      be
      displayed for the user to see in the category page. After the category is added, admin will be returned to the
      index
      page and there will be a warning message displayed on top of the page "with success". Admin is afterwards able to
      see
      the edit and delete button. Edit button will redirect the admin to the form again. Delete button will completely
      wipe
      the category from the database.

    - In the menus tab admin is able to add a new menu which opens the menus/create.blade page where admin is filling
      out
      a form where they add the menus name, image, price, description and choose which category the menus belongs to and
      add
      it to the database. After submitting the data, admin is returned to the index page and will see options to Edit or
      Delete the menus.

    - In the tables tab admin is able to add a new table which opens the tables/create.blade page with a form where
      admin
      is able to add the table name, guest number, status( Pending, Available, Not Available) and location( Front,
      Inside, Outside ).
      If the table is unavailable at the moment, the user will not be able to choose it from a dropdown menu when they
      try to
      make reservation. After adding a new table admin is returned to the index page and will see options to Edit or
      Delete the table.

    - In the reservations tab admin is able to add a new reservation which opens the reservations/create.blade page with
      a form. In the form admin can add First name, Last name, Email, Phone number, reservation date, guest number and
      choose the table for the guests. When choosing reservation date, admin can make reservation for the next 7 days
      from 3pm to 10pm. If the incorrect time is chosen the form will return a error message. After the reservation is
      stored, admin is returned to the index page where they will be able to edit or delete the reservation.<br>


- Restaurant Categories: Guests can view the categories page, where the picture of category would be displayed and with a
  hover over the picture the name and description of the category would be visible. There is a "See More" text below the
  picture which redirects the user to the specific category page where they would be able to see the menus from the
  chosen category.
- Restaurant menus: Guests can view the menus, including dishes, prices, and descriptions.
- Reservation system: Guests can enter the interactive Reservations page which is consisted out of two steps. In the 
first step they will see a form to fill. Guest should enter First name, Last name, Email, Phone Number, Reservations 
date with a message below "Please choose time between 3pm and 10pm." and to add number of guests. After clicking on 
the button next, guest will see the step two which displays the tables available considering the date and number of 
guests chosen in the last step. When clicking submit guest will be redirected to the thank you page which will let the
guest know that the reservation has been stored.
- Ordering system [WORK IN PROGRESS-NOT LIVE YET]:Users can add dishes to their cart, specify quantities, and place
  orders.


