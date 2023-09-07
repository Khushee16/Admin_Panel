        
            </div>
        </div>
    </div>
</div>

<script>
    // $(".select2").select2();
    // $(".select2-district").select2();
    // $(".select2-staff").select2();
    // $(".select2-status").select2();
    function openNav() {
    document.getElementById("notifications").style.width = "300px";
    }
    function CloseNav() {
    document.getElementById("notifications").style.width = "0px";
    }
</script>

<script>
    $(document).ready(function () {
    // Function to toggle the sidebar and content classes
    function toggleSidebar() {
        $("#sidebar").toggleClass("side_normal side_small");
        $("#content").toggleClass("content_normal content_big");
    }

    // Toggle sidebar on button click
    $("#menu-btn").click(function () {
        toggleSidebar();
    });
    });
</script>

<script>

        /* ======= RESPONSIVNESS ======= */
        let menuBtn = document.getElementById("menu-btn");
        let menu = document.getElementById("menu");
        menuBtn.addEventListener("click", () => {
        menu.classList.toggle("open");
        menu.classList.toggle("visible");
        });

        window.addEventListener("resize", responsive);

        // Alternative to DOMContentLoaded event
        document.onreadystatechange = () => {
        responsive();
        };

        // Make the nav menu responsive;
        function responsive() {
        let w = window.innerWidth;
        if (w <= 850) {
            if (menu.classList.contains("open")) {
            menu.classList.remove("open");
            }
        } else if (w > 650) {
            if (!menu.classList.contains("open")) {
            menu.classList.add("open");
            }
        }
        }
</script>

<script type="text/javascript">
   $(document).ready(function(){
     //jquery for toggle sub menus
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     //jquery for expand and collapse the sidebar
     $('.menu-btn').click(function(){
       $('.side-bar').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
     });

     $('.close-btn').click(function(){
       $('.side-bar').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
     });
   });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>