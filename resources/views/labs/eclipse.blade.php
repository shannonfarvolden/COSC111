@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Opening up Eclipse</h3>
        </div>
        <div class="panel-body">

            <p>
                Eclipse is another application that we can use to write and run programs.
                Previously, we used a text editor to write our programs, then use the command
                prompt to compile and run it. Eclipse lets us do all of these steps in one
                program. While it's more convenient, it skips too many steps so it's usually
                not the first application taught in an introductory course.
            </p>

            <p>
                To start the Eclipse program at your computer at school, press the
                <tt>Start</tt> button, go to <tt>All Programs</tt>, then <tt>Eclipse</tt>, then
                click on <tt>Eclipse</tt> as in the figure below.
            </p>
            <center><img src="images/lab1/eclipseLocation.png" width="400" height="500"></center>

            <p>
                All the lab and library computers have Eclipse. They
                have either 4.1 or 4.2, which is called "Juno" by the creators of Eclipse. If
                you use a version other than Juno, there is a possibility that the instructions
                will be slightly different, but the same idea applies. If you want to use
                Eclipse on your own computers, it is free to download from
                <a href="http://www.eclipse.org/downloads/"> here</a>.
            </p>

            <p>
                When you start Eclipse for the first time, you will be asked where your
                "workspace" is. The workspace is the location of the folder where you will be
                working. So if you want all your work to be saved in the
                <tt>Cosc 111</tt> folder, then select that folder as your workspace. Remember
                that this folder is in your F drive. To specify that folder, click
                <tt>Browse</tt> and keep selecting the folders until you get the
                <tt>Cosc 111</tt> folder that is in the F drive. When you have that, it will
                look something like the figure here:
            <center><img src="images/lab1/browseWorkspace.png" width="700" height="500"></center>

            <p>
                Click "Ok" to continue. The first time you pick a new workspace, you will be
                presented with this screen below. Click the "Workbench" button at the top right
                hand corner..
            </p>
            <center><img src="images/lab1/newWorkspace.png" width="700" height="500"></center>

            <p>
                Now you will be at the main screen of Eclipse as the figure below where we can do our work.
            </p>
            <center><img src="images/lab1/homeScreen.png" width="700" height="500"></center>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Setting up a Project</h3>
        </div>
        <div class="panel-body">

            <p>
                Recall we made new folders for each assignment, lab, or activity we worked on.
                In Eclipse, the equivalent is to make a <tt>Project</tt>. This project will
                manage the <tt>java</tt> and <tt>class</tt> files for you. To create a new
                project, click on the "File" menu, then "New", then select "Java Project".
            </p>
            <center><img src="images/lab1/javaProject.png" width="700" height="500"></center>

            <p>
                A screen will pop up like the one shown below and ask you to enter in a Project name.
                This is the name of your folder. So name it as you normally would name a folder
                for an assignment or a lab. Here, we will call it
                <tt>EclipseHelloWorld</tt>. Ignore the other information and just click "Finish".
            </p>
            <center><img src="images/lab1/projectName.png" width="700" height="600"></center>

            <!-- p>
            Also note, if you are in the wrong perspective and you create a Java Project,
                        it will give you the following message asking if you want to change perspective
                        to Java.  Click yes.
            </p>
                        <center><img src="images/lab1/perspective.png" width="700" height="500"></center-->

            <p>
                Once the project is created successfully, you will see an arrow pointing to a
                blue folder on the left hand side of the screen called
                <tt>EclipseHelloWorld</tt>, just like the figure below.
            </p>
            <center><img src="images/lab1/updatedWorkspace.png" width="700" height="500"></center>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Writing Java Code</h3>
        </div>
        <div class="panel-body">

            <p>
                Generally, each Java file will have a separate Java class. So to starting
                writing Java code, you will need to create a new file for Java classes as follows.
            </p>
            <!--p>
            First,
                        click on EclipseHelloWorld so it is selected.  Now go to File, New, and click
                        on Class.
            </p>
                        <center><img src="images/lab1/newClass.png" width="700" height="500"></center>

            <p>
            Similarly,
            -->
            Right click on <tt>EclipseHelloWorld</tt> and a menu will pop up as shown
            below. Go to "New", then click on "Class".
            </p>
            <center><img src="images/lab1/newClassRightClick.png" width="700" height="500"></center>

            <p>
                A new screen will pop up that looks like this:
            </p>
            <center><img src="images/lab1/classInfo.png" width="700" height="500"></center>
            <p>
                Although there is a lot of information on the screen, we only need to know and
                specify two things:
            <ul>
                <li>What is the name of the file? Remember it has to be the same name as the
                    class (but it can be different from the project/folder name).
                <li>Is this a test class with a <tt>main()</tt> method, or just a regular class?
            </ul>
            <p>
                Once you know the name of the file, you type it into the box for "Name" about
                the middle of the scrren. In our example, we will call our file
                <tt>HelloWorld</tt>. In this example, this class happens to be a test class. So
                we check off the box beside <tt>public static void main(String[] args)</tt>.
                If you are creating a class that is not a test class, you just leave this box
                unchecked.
                When you are done, click "Finish" at the bottom. Then a file will be created
                for you and your screen will look something like this:
            </p>
            <center><img src="images/lab1/updatedWorkspaceWithClass.png" width="700" height="500"></center>
            <p>
                Note that on the left hand side, your project expanded to a "src" folder, which
                expanded to "default package", and then expanded to a file called
                <tt>HelloWorld.java</tt>. At the same time, on the main screen, a template for
                the test class has been created for you. At this point, you can type into the
                class what you would normally type into the text editor in previous exercises.
            </p>

            <p>
                To continue, fill out the <tt>main()</tt> method so that it has a print
                statement that displays "Hello world!" to the screen. Your program will look
                like the figure below. When you are done, type Ctrl-S to save your work.
            </p>
            <center><img src="images/lab1/updatedHelloWorld.png" width="700" height="500"></center>


        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Compiling and Running the Program</h3>
        </div>
        <div class="panel-body">

            <p>
                In Eclipse, compiling the program has another term called "build". So to
                compile your code, go to the Project menu, then click "Build All" as shown below.
            </p>
            <center><img src="images/lab1/build.png" width="700" height="500"></center>

            <!-- p>
            If this option is grayed out and Build Automatically has a check mark by it,
                        then the project is built, or compiled, every time you save.
            </p>
                        <center><img src="images/lab1/buildAutomatically.png" width="700" height="500"></center -->

            <p>
                Next, to run the program, you can either go to the Run menu and click "Run", or
                click the green "Play" button as a shortcut as shown in the screen below.
            </p>
            <center><img src="images/lab1/runButton.png" width="700" height="500"></center>

            <p>
                When this program is run, the output will be displayed at the bottom of the
                screen in a tab called the Console, as shown below.
            </p>
            <center><img src="images/lab1/output.png" width="700" height="500"></center>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">When Things Go Wrong</h3>
        </div>
        <div class="panel-body">

            <p>
                How does Eclipse show us when there are errors?
                If we have a syntax mistake that stops our code from compiling, Eclipse
                will highlight that part in red directly in your program, as shown in the
                screen below (the semicolon was deleted to create this error).
            </p>
            <center><img src="images/lab1/syntaxError.png" width="700" height="500"></center>

            <p>
                When this shows up, you can place our mouse over the red X to view the error
                message, like the screen here:
            </p>
            <center><img src="images/lab1/syntaxErrorMessage.png" width="700" height="500"></center>
            <p>
                Sometimes Eclipse will have suggestions to help you fix the error. When you use
                Eclipse more, you will see the error messages and suggestions and you can
                practice with it. Sometimes the errors come up in the semantics of the code. So
                what you've typed might follow the Java language syntax, but perhaps it missed
                something in the initialization step or in a logical step. In this case, a red
                error message will be printed in the Console like so:
            </p>
            <center><img src="images/lab1/eclipseRunTimeError.png" width="700" height="500"></center>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Added Customization: Changing Workspaces</h3>
        </div>
        <div class="panel-body">

            <p>
                You can change your workspace by going to "File", then "Switch Workspace", and
                click on your workspace in the F drive as shown below.

            <p>
            <center><img src="images/lab1/switchWorkspace.png" width="700" height="500"></center>

            <p>
                If you do not see your workspace, click "Other".
                Then navigate to your <tt>Cosc 111</tt> folder by selecting "Browse". When you
                are done, click "OK".
            </p>
            <center><img src="images/lab1/otherWorkspace2.png" width="700" height="500"></center>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Added Customization: Changing Perspectives</h3>
        </div>
        <div class="panel-body">

            <p>
                There is a possibility that Eclipse might look different when you first start
                it. For example, notice that the following image layout looks a bit different
                and the top right has "Java EE" instead of "Java", like previous images.
            </p>
            <center><img src="images/lab1/javaEE.png" width="700" height="500"></center>

            <p>
                This means we are in a different perspective. Perspectives allow Eclipse to do
                the proper set up for different purposes. For now, we will use the basic Java
                perspective. To change the perspective, go to the "Window" menu, then "Open
                Perspective", then click on "Java" as shown below.
            </p>
            <center><img src="images/lab1/changePerspective.png" width="700" height="500"></center>

            <p>
                If however "Java" is not listed, select "Other" then click on "Java" in that list
                and click on "OK" as shown below.
            </p>
            <center><img src="images/lab1/otherPerspective.png" width="700" height="500"></center>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Added Customization: Adding Line Numbers</h3>
        </div>
        <div class="panel-body">

            <p>
                A useful option is to have the line numbers visible in Eclipse. To do this,
                right click the bar on the left hand side, and click the Show Line Numbers.
            </p>
            <center><img src="images/lab1/lineNumberOption.png" width="700" height="500"></center>

            <p>
                This will add line numbers to the left hand side, which just makes things
                easier to read and debug.
            </p>
            <center><img src="images/lab1/lineNumbers.png" width="700" height="500"></center -->

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