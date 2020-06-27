<!DOCTYPE html>
<html lang="en">
<x-admin.head/>
<body class="dark-edition">
<div class="wrapper ">
    <x-admin.sidebar/>
    <div class="main-panel">
        <!-- Navbar -->
        <x-admin.nav/>
        <!-- End Navbar -->
        @yield("content")
        <x-admin.footer/>
    </div>
</div>
<x-admin.fixed/>
    <x-admin.scripts/>
</body>
</html>
