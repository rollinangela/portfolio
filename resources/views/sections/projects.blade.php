<!-- Projects -->
<section id="projects">

    <div class="container">

        <div class="section-title text-center">

            <span class="section-tag">
                PORTFOLIO
            </span>

            <h2>Selected Projects</h2>

            <p>
                Real projects demonstrating my skills in UI/UX Design,
                Web Development, and AutoCAD Drafting.
            </p>

        </div>

        <div class="row g-4">

            <!-- Project: Wupfleet -->
<div class="col-lg-4 mb-4">

    <div class="card project-card h-100">

        <img src="{{ asset('images/projects/wupfleet/wupfleet-logo-preview.png') }}"
             class="card-img-top project-image"
             alt="wupfleet"
             style="height:260px; object-fit:contain; background:#f8f9fa;">

        <div class="card-body project-content">

            <h4 class="fw-bold">
                WupFleet
            </h4>

            <p>
                 A web-based fleet management system developed as a university capstone
                 project for Wesleyan University–Philippines. The system streamlines
                 vehicle requests, driver assignments, trip approvals, and trip
                 monitoring to improve transportation management.
            </p>

            <span class="badge bg-success">
                UI/UX
            </span>

            <span class="badge bg-primary">
                Figma
            </span>

            <br><br>

            <button class="btn project-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#wupfleetGallery">

                    View Gallery

            </button>

             <a href="https://wupfleet.com/auth/login"
       target="_blank"
       rel="noopener noreferrer"
       class="btn project-btn">
        🌐 Visit Website
    </a>

            

        </div>

    </div>

</div>

            <!-- Project 2 -->
           <div class="col-lg-4 mb-4">

    <div class="card project-card h-100">

        <img src="{{ asset('images/projects/studysync/studysync-logo.png') }}"
             class="card-img-top project-image"
             alt="studysync"
             style="height:260px; object-fit:contain; background:#f8f9fa;">

        <div class="card-body project-content">

            <h4 class="fw-bold">
                StudySync
            </h4>

            <p>
                A student-focused mobile application prototype designed in Figma as a university project to help students stay organized by combining task management, 
                subject organization, notes, reminders, and a distraction-free Focus Mode in one centralized platform.
            </p>

            <span class="badge bg-info">
                Figma
            </span>

            <span class="badge bg-dark">
                UI/UX
            </span>

            <br><br>

            <button class="btn project-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#studySyncGallery">

                    View Gallery

            </button>


        </div>

    </div>

</div>
            <!-- Project 3 -->
<div class="col-lg-4 mb-4">

    <div class="card project-card h-100">

        <img src="{{ asset('images/projects/autocad/AutocadLogo.png') }}"
             class="card-img-top project-image"
             alt="AutoCAD"
             style="height:260px; object-fit:contain; background:#f8f9fa;">

        <div class="card-body project-content">

            <h4 class="fw-bold">
                AutoCAD Technical Drawings
            </h4>

            <p>
                A collection of AutoCAD technical drawings created during my Computer Engineering studies, 
                including floor plans, mechanical drawings, PCB layouts, 
                and drafting exercises that demonstrate precision and technical drafting skills.
            </p>

            <span class="badge bg-warning text-dark">AutoCAD</span>
            <span class="badge bg-secondary">Technical Drawing</span>

            <br><br>

            <button class="btn project-btn"
                     data-bs-toggle="modal"
                     data-bs-target="#autocadGallery">

                    View Gallery

            </button>
            

        </div>

    </div>

</div>


<!-- Wupfleet Gallery -->
<div class="modal fade"
     id="wupfleetGallery"
     tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content">

<div class="modal-header">

<h3 class="modal-title gallery-title">
🚛 WupFleet UI Design
</h3>

<button class="btn-close"
        data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<div class="gallery-view">

    <div class="gallery-item">

    <img src="{{ asset('images/projects/wupfleet/login.png') }}"
         class="gallery-img">

    <div class="gallery-info">
        <h5>Login</h5>
        <p>Secure login screen for users.</p>
    </div>

</div>
    
    <hr class="drawing-divider">
    <div class="gallery-item">

    <img src="{{ asset('images/projects/wupfleet/registration.png') }}"
         class="gallery-img">

    <div class="gallery-info">
        <h5>Registration</h5>
        <p>Create a new WupFleet account.</p>
    </div>

</div>

     <!-- Account -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/account.png') }}"
                 class="gallery-img"
                 alt="Account">

            <div class="gallery-info">
                <h5>User Account</h5>
                <p>
                    Displays the user's personal information and account settings.
                </p>
            </div>
        </div>

     <!-- Request Form -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/request-form-calendar.png') }}"
                 class="gallery-img"
                 alt="Request Form">

            <div class="gallery-info">
                <h5>Trip Request Form</h5>
                <p>
                    Users select travel dates and provide trip details when requesting a vehicle.
                </p>
            </div>
        </div>

      <!-- Request Status -->
       <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/request-status.png') }}"
                 class="gallery-img"
                 alt="Request Status">

            <div class="gallery-info">
                <h5>Request Status</h5>
                <p>
                    Displays pending, approved, rejected, and completed transportation requests.
                </p>
            </div>
        </div>

     <!-- Select Location -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/select-location.png') }}"
                 class="gallery-img"
                 alt="Select Location">

            <div class="gallery-info">
                <h5>Select Location</h5>
                <p>
                    Users choose pickup and destination locations before submitting their request.
                </p>
            </div>
        </div>

     <!-- Trip Calendar -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/trip-calendar.png') }}"
                 class="gallery-img"
                 alt="Trip Calendar">

            <div class="gallery-info">
                <h5>Trip Calendar</h5>
                <p>
                    Calendar view showing scheduled transportation requests and bookings.
                </p>
            </div>
        </div>

     <!-- Trip Tracking -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/trip-tracking.png') }}"
                 class="gallery-img"
                 alt="Trip Tracking">

            <div class="gallery-info">
                <h5>Trip Tracking</h5>
                <p>
                    Enables users to monitor the progress of their assigned transportation requests.
                </p>
            </div>
        </div>


    <!-- Live Tracking -->
     <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/live-trip-tracking.png') }}"
                 class="gallery-img"
                 alt="Live Tracking">

            <div class="gallery-info">
                <h5>Live Vehicle Tracking</h5>
                <p>
                    Shows the real-time location of the assigned vehicle during an active trip.
                </p>
            </div>
        </div>

     <!-- Vehicle Records -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/vehicle-records.png') }}"
                 class="gallery-img"
                 alt="Vehicle Records">

            <div class="gallery-info">
                <h5>Vehicle Records</h5>
                <p>
                    Displays vehicle information, availability, and assigned transportation units.
                </p>
            </div>
        </div>

    <!-- Driver Dashboard -->
     <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/driver-trips-interface.png') }}"
                 class="gallery-img"
                 alt="Driver Dashboard">

            <div class="gallery-info">
                <h5>Driver Dashboard</h5>
                <p>
                    Interface where drivers manage assigned trips and monitor their schedules.
                </p>
            </div>
        </div>

     <!-- Completed Trips -->
      <hr class="drawing-divider">
        <div class="gallery-item">
            <img src="{{ asset('images/projects/wupfleet/completed-trips&profile.png') }}"
                 class="gallery-img"
                 alt="Completed Trips">

            <div class="gallery-info">
                <h5>Completed Trips & Profile</h5>
                <p>
                    Displays completed trip history together with the user's profile information.
                </p>
            </div>
        </div>

    

</div>

</div>

</div>

</div>

</div>

<!-- StudySync Gallery -->
<div class="modal fade"
     id="studySyncGallery"
     tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content">

<div class="modal-header">

<h3 class="modal-title gallery-title">
    📱 StudySync UI/UX Design
</h3>

<button class="btn-close"
        data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<!-- ================= Login + Home ================= -->
<div class="row align-items-center mb-5">

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/login.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Login</h5>
    </div>

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/home.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Home Dashboard</h5>
    </div>

    <div class="gallery-info mt-4">
        <p>
            Students securely sign in to their accounts before accessing the
            dashboard, where they can quickly view study progress, upcoming
            tasks, and learning tools from one central location.
        </p>
    </div>

</div>

<hr class="drawing-divider">

<!-- ================= My Desk + Profile ================= -->
<div class="row align-items-center mb-5">

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/my-desk.png') }}"
             class="gallery-img">
        <h5 class="mt-3">My Desk</h5>
    </div>

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/profile.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Profile</h5>
    </div>

    <div class="gallery-info mt-4">
        <p>
            My Desk provides an organized workspace for subjects and learning
            materials, while the Profile page allows users to manage personal
            information and account settings.
        </p>
    </div>

</div>

<hr class="drawing-divider">

<!-- ================= Quiz + Flashcards ================= -->
<div class="row align-items-center mb-5">

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/create-quiz-set.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Create Quiz Set</h5>
    </div>

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/create-new-flashcards.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Flashcards</h5>
    </div>

    <div class="gallery-info mt-4">
        <p>
            Students can create personalized quiz sets and flashcards to
            reinforce learning, improve memorization, and review important
            concepts efficiently.
        </p>
    </div>

</div>

<hr class="drawing-divider">

<!-- ================= Calendar + To-do ================= -->
<div class="row align-items-center mb-5">

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/calendar.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Calendar</h5>
    </div>

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/to-do-list.png') }}"
             class="gallery-img">
        <h5 class="mt-3">To-Do List</h5>
    </div>

    <div class="gallery-info mt-4">
        <p>
            The integrated calendar and task manager help students organize
            schedules, monitor deadlines, and stay productive throughout their
            academic activities.
        </p>
    </div>

</div>

<hr class="drawing-divider">

<!-- ================= Breakdown + Focus ================= -->
<div class="row align-items-center mb-5">

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/break-down-task.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Task Breakdown</h5>
    </div>

    <div class="col-md-6 text-center">
        <img src="{{ asset('images/projects/studysync/focus-session.png') }}"
             class="gallery-img">
        <h5 class="mt-3">Focus Session</h5>
    </div>

    <div class="gallery-info mt-4">
        <p>
            Large assignments can be divided into smaller tasks, while Focus
            Session provides a distraction-free environment that encourages
            productive study habits.
        </p>
    </div>

</div>

<hr class="drawing-divider">

<!-- ================= Notifications ================= -->
<div class="row justify-content-center mb-5">

    <div class="col-12 text-center">

        <img src="{{ asset('images/projects/studysync/notification page.png') }}"
                 class="img-fluid rounded shadow"
                 alt="Notifications"
                 style="height:620px; width:auto; object-fit:contain;">

        <h4 class="mt-4">Notifications</h4>

    </div>

    <div class="col-12 mt-4">

        <div class="gallery-info">

            <p>
                Timely reminders keep students informed about upcoming tasks,
                quizzes, study sessions, and important academic events.
            </p>

        </div>

    </div>

</div>

</div>

</div>

</div>

</div>


<!-- AutoCAD Gallery -->
<div class="modal fade"
     id="autocadGallery"
     tabindex="-1">

<div class="modal-dialog modal-xl modal-dialog-scrollable">

<div class="modal-content">

<div class="modal-header">

<h3 class="modal-title gallery-title">
📐 AutoCAD Technical Drawings
</h3>

<button class="btn-close"
        data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

    <!-- Drawing 1 -->
    <div class="drawing-item">
        <h5>Mechanical Tool Plate</h5>
        <img src="{{ asset('images/projects/autocad/page_1.png') }}" class="drawing-img" alt="Technical Drawing 1">

            
        
    </div>

    <!-- Drawing 2 -->
     <hr class="drawing-divider">
    <div class="drawing-item">
        <h5>Building Floor Plan</h5>
        <img src="{{ asset('images/projects/autocad/CECT_page_1.png') }}" class="drawing-img" alt="Technical Drawing 2">


    </div>

    <!-- Drawing 3 -->
     <hr class="drawing-divider">
    <div class="drawing-item">
        <h5>Residential Floor Plan</h5>
        <img src="{{ asset('images/projects/autocad/CAD_house_page_1.png') }}" class="drawing-img" alt="Technical Drawing 3">

    </div>

    <!-- Drawing 4 -->
     <hr class="drawing-divider">
    <div class="drawing-item">
        <h5>Mechanical Tool (Isometric)</h5>
        <img src="{{ asset('images/projects/autocad/Mechanical_tool_page_1.png') }}" class="drawing-img" alt="Technical Drawing 4">

    </div>

    <!-- Drawing 5 -->
     <hr class="drawing-divider">
    <div class="drawing-item">
        <h5>Mechanical Tool (Dimensioned)</h5>
        <img src="{{ asset('images/projects/autocad/CAD_ACT_NO2_page_1.png') }}" class="drawing-img" alt="Technical Drawing 5">

        
    </div>

    <!-- Drawing 6 -->
     <hr class="drawing-divider">
    <div class="drawing-item">
        <h5>PCB Layout</h5>
        <img src="{{ asset('images/projects/autocad/PCB_page_1.png') }}" class="drawing-img" alt="Technical Drawing 6">

       
    </div>


</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</div>
