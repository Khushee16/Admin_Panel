        
            </div>
        </div>
    </div>
</div>

<script>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script >
        document.addEventListener('DOMContentLoaded', function() {
        const yearSelect = document.getElementById('year-select');
        const chartContainer = document.getElementById('chartContainer');
        let year = new Date().getFullYear();
        let data = [
            { label: 'January', y: 0 },
            { label: 'February', y: 0 },
            { label: 'March', y: 0 },
            { label: 'April', y: 0 },
            { label: 'May', y: 0 },
            { label: 'June', y: 0 },
            { label: 'July', y: 0 },
            { label: 'August', y: 0 },
            { label: 'September', y: 0 },
            { label: 'October', y: 0 },
            { label: 'November', y: 0 },
            { label: 'December', y: 0 },
        ];
        function handleYearChange(event) {
            year = parseInt(event.target.value);
            updateData();
        }
        function fetchYearlyData(year) {
            if (year === 2022) {
                return [
                    { label: 'January', y: 10 },
                    { label: 'February', y: 20 },
                    { label: 'March', y: 15 },
                    { label: 'April', y: 0 },
                    { label: 'May', y: 30 },
                    { label: 'June', y: 0 },
                    { label: 'July', y: 20 },
                ];
            } else if (year === 2023) {
                return [
                    { label: 'January', y: 25 },
                    { label: 'February', y: 35 },
                    { label: 'March', y: 40 },
                    { label: 'April', y: 10 },
                    { label: 'May', y: 50 },
                    { label: 'November', y: 15 },
                ];
            }
            return [];
        }
        function updateData() {
            const yearlyData = fetchYearlyData(year);
            const updatedData = data.map(monthData => {
                const matchingData = yearlyData.find(data => data.label === monthData.label);
                const y = matchingData ? matchingData.y : 0;
                return { ...monthData, y };
            });
            data = updatedData;
            renderChart();
        }
        function renderChart() {
            const chartData = {
                animationEnabled: true,
                backgroundColor: "#0f0f0f",
                title: {
                    text: `Monthly Values of Year ${year}`,
                    fontColor: '#ffffff',
                    fontWeight: 'normal'
                },
                axisX: {
                    title: 'Month',
                    titleFontColor: "#ffffff",
                    labelFontColor: "#ffffff",
                },
                axisY: {
                    title: 'Value',
                    titleFontColor: "#ffffff",
                    labelFontColor: "#ffffff",
                },
                data: [
                    {
                        type: 'line',
                        lineColor: '#ffffff',
                        markerColor: '#ffffff',
                        markerSize: 10,
                        lineThickness: 3,
                        dataPoints: data.map(entry => ({
                            label: entry.label,
                            y: entry.y,
                        })),
                    },
                ],
            };
            new CanvasJS.Chart(chartContainer, chartData).render();
        }
        yearSelect.addEventListener('change', handleYearChange);
        renderChart();
        });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
      const pieChartContainer = document.getElementById('pieChartContainer');
      const Pie1 = {
          backgroundColor: "#0f0f0f",
          animationEnabled: true,
          toolTip:{
            backgroundColor: "#000000",
          },
          title: {
              text: "Split of Revenue by Product Categories",
              fontWeight: "normal",
              fontColor: "white",
          },
          subtitles: [{
              text: "Total Revenue :₹64.08K",
              verticalAlign: "center",
              fontSize: 20,
              dockInsidePlotArea: true,
              fontColor: "#ffffff",
              fontWeight: "5"
          }],
          data: [
              {
                  fontColor: "white",
                  type: "doughnut",
                  indexLabel: "{name}: {y}",
                  yValueFormatString: "#,###'%'",
                  dataPoints: [
                      { name: "Acne Controller Serum", y: 49, color: "#7c3939" },
                      { name: "Ozonized Purifying Cleanser", y: 8, color: "#6c6c2b " },
                      { name: "Future Texture Toner", y: 18, color: "#bd6340" },
                      { name: "Defense moisturizer", y: 25, color: "#6e5314" }
                  ],
                  indexLabelFontColor: "white",
              }
          ]
      };
      const chart = new CanvasJS.Chart(pieChartContainer, Pie1);
      chart.render();
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const chartContainer = document.getElementById('chartContainerpie');
        const ctx = chartContainer.getContext('2d');
        const data = {
          labels: ['Acne Controller Serum', 'Ozonized Purifying Cleanser', 'Future Texture Toner', 'Defense moisturizer'],
          datasets: [{
            data: [12, 30, 20 ,17],
            backgroundColor: [ '#7c3939', '#6c6c2b', '#bd6340', '#6e5314'],
            borderWidth: 1,
          }],
        };

        const options = {
          responsive: true,
          plugins: {
            legend: {
              display: true,
              position: 'bottom',
              labels: {
                color: 'white', 
              },
            },
          },
          cutout: '70%', 
        };

        const chartInstance = new Chart(ctx, {
          type: 'pie',
          data: data,
          options: options,
        });
    });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>