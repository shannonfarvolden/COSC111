@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Using School Computers</h3>
        </div>
        <div class="panel-body">

            <p>
                Most of the time when you save documents, you save them to, say
                <tt>C:\User\Documents</tt>. If you do that on the school computer, it will
                save what you're working on to that single computer only. This means, you
                won't be able to access the files if you use a different computer on another
                day.
                However, if you save your work on the F drive, you will be able to access all
                your files from any computer, even from home.
            </p>

            <p>
                To view your F drive, click on <tt>Computer</tt> on the left hand side (as
                shown in the image below). This will open a window, then under <tt>Network
                    Location</tt>, double click on the icon that has your student number (the one
                selected in this image has the student number 64387087).
            </p>

            <center><img src="images/lab1/fdrive.png" width="700" height="400"></center>

            <p>
                Now you are in your F drive. Everything you save here will be available on all
                the school computers. As you can see in the image, it has several folders and
                one file called <tt>untitled.bmp</tt> that are on this student's F drive already.
            </p>

            <center><img src="images/lab1/newFolder.png" width="700" height="400"></center>

            <p>
                Since we are going to work in this, make a new folder for this course. To do
                this, press the <tt>New Folder</tt> button at the top. Give your folder a
                meaningful name, such as <tt>Cosc 111</tt>.
            </p>

            <p>
                <tt>Cosc 111</tt> will be the main folder that all your work for this course
                will go into. To keep your files organized, you will want to make subfolders
                inside <tt>Cosc 111</tt> for each lab, assignment, or exercise you work on. So
                once you are in the <tt>Cosc 111</tt> folder, you can create a new folder by
                pressing the <tt>New Folder</tt> button like before, and naming it accordingly.
            </p>

        </div>
    </div>

    <a href={{ url('/lab1') }}>Back to Lab 1</a>
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Labs',
            page: '/labs'
        });
    </script>
@endsection