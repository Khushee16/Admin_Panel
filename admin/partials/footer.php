        </div>
        </div>
        </div>
        </div>
        <script src="<?php echo $url; ?>/Assets/JS/shotable.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/nestedshortable.js"></script>
        <script>
            init__select();
            function init__select() {
                let selects = document.querySelectorAll('.Tselect');
                let options = document.querySelectorAll('.option');
                let exist_open_select = document.querySelector('.Tselect.open');
                selects.forEach(select => {
                    select.addEventListener('click', e => {
                        exist_open_select = document.querySelector('.Tselect.open');
                        if (e.target.closest('.Tselect').classList.contains('open')) {
                            e.target.closest('.Tselect').classList.remove('open');
                        } else {
                            e.target.closest('.Tselect').classList.add('open');
                        }
                        exist_open_select ? exist_open_select.classList.remove('open') : null;
                    });
                });
                let options_init_selected = document.querySelectorAll('.option[aria-selected="true"]');
                if (options_init_selected.length > 0) {
                    options_init_selected.forEach(option => {
                        let dft_active_value = option.attributes.value.value;
                        let dft_active_label = option.innerText;
                        let dft_parent = option.closest('.Tselect');
                        console.log(dft_active_value, dft_active_label);
                        dft_parent.querySelector('input[type=hidden]').setAttribute('value', dft_active_value);
                        dft_parent.querySelector('input[type=text]').setAttribute('value', dft_active_label);
                        setTimeout(() => {
                            let bgColor = window.getComputedStyle(option).getPropertyValue('background-color');
                            dft_parent.querySelector('input[type=text]').style.backgroundColor = bgColor;
                        }, 10); 
                    });
                }

                options.forEach(option => {
                    option.addEventListener('click', e => {
                        e.stopPropagation();
                        let this_select = e.target.closest('.Tselect');
                        let this_input = this_select.querySelector('input[type="text"]');
                        let this_input__hidden = this_select.querySelector('input[type="hidden"]');
                        let alreadyActiveOption = this_select.querySelector('.option.active');
                        alreadyActiveOption ? alreadyActiveOption.classList.remove('active') : null;
                        alreadyActiveOption ? alreadyActiveOption.removeAttribute('selected') : null;
                        e.target.classList.add('active');
                        e.target.setAttribute('aria-selected', true);
                        this_input.setAttribute('value', e.target.innerText);
                        this_input__hidden.setAttribute('value', e.target.attributes.value.value);
                        let bgColor = window.getComputedStyle(e.target).getPropertyValue('background-color');
                        let textColor = window.getComputedStyle(e.target).getPropertyValue('color'); // Get text color
                        this_input.style.backgroundColor = bgColor;
                        this_input.style.color = textColor; // Set text color
                        console.log(e.target.attributes.value.value, e.target.innerText)
                        exist_open_select.classList.remove('open');
                    });
                });

                document.addEventListener('click', e => {
                    // Check if exist open select
                    exist_open_select = document.querySelector('.Tselect.open');
                    if (exist_open_select) {
                        let isSelect = exist_open_select.contains(e.target);
                        isSelect ? null : exist_open_select.classList.remove('open')
                    }
                })
            }
        </script>

        <script>
            var x, i, j, l, ll, selElmnt, a, b, c;
            /*look for any elements with the class "custom-select":*/
            x = document.getElementsByClassName("custom-select");
            l = x.length;
            for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
                });
            }
            function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                arrNo.push(i)
                } else {
                y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
                }
            }
            }
            /*if the user clicks anywhere outside the select box,
            then close all select boxes:*/
            document.addEventListener("click", closeAllSelect);
        </script>

        <script src="<?php echo $url; ?>/Assets/JS/datatable/jquery.dataTables.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/dataTables.buttons.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/buttons.flash.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/jszip.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/js_buttons.colVis.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/js_buttons.html5.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/js_buttons.print.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/js_dataTables.bootstrap.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/buttons.bootstrap.min.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/pdfmake_vfs_fonts.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/datatable/pdfmake.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'excelFlash', 'excel', 'pdf', 'print', {
                            text: 'Reload',
                            action: function(e, dt, node, config) {
                                dt.ajax.reload();
                            }
                        }
                    ]
                });
            });
        </script>

        <SCRipt>
            $(document).ready(function() {
                var $btns = $('.pos_btn').click(function() {
                    if (this.id == 'all') {
                        $('#pos_parent > div').fadeIn(450);
                    } else {
                        var $el = $('.' + this.id).fadeIn(450);
                        $('#pos_parent > div').not($el).hide();
                    }
                    $btns.removeClass('active');
                    $(this).addClass('active');
                })
            });
        </SCRipt>

        <script>
            // $("ul").on("click", ".init", function() {
            // $(this).closest("ul").children('li:not(.init)').toggle();
            // });
            // var allOptions = $("ul").children('li:not(.init)');
            // $("ul").on("click", "li:not(.init)", function() {
            //     allOptions.removeClass('selected');
            //     $(this).addClass('selected');
            //     $("ul").children('.init').html($(this).html());
            //     allOptions.toggle();
            // });
        </script>

        <script>
            function openNav() {
                document.getElementById("notifications").style.width = "300px";
            }
            function CloseNav() {
                document.getElementById("notifications").style.width = "0px";
            }
        </script>

        <script>
            $(document).ready(function() {
                // Function to toggle the sidebar and content classes
                function toggleSidebar() {
                    $("#sidebar").toggleClass("side_normal side_small");
                    $("#content").toggleClass("content_normal content_big");
                }

                // Toggle sidebar on button click
                $("#menu-btn").click(function() {
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

        </script>
        <!-- <script>
            window.addEventListener('DOMContentLoaded', function() {
                const sidebar = document.getElementById('sidebar'); 
                const content = document.getElementById('content'); 
                function setSidebarHeight() {
                    const contentHeight = content.offsetHeight;
                    sidebar.style.height = contentHeight + 'px';
                }
                setSidebarHeight();
                window.addEventListener('resize', setSidebarHeight);
            });
        </script> -->

        <script type="text/javascript">
            $(document).ready(function() {
                $('.sub-btn').click(function() {
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');
                });
                $('.menu-btn').click(function() {
                    $('.side-bar').addClass('active');
                    $('.menu-btn').css("visibility", "hidden");
                });

                $('.close-btn').click(function() {
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css("visibility", "visible");
                });
            });
        </script>

        <script>
            // ************************ Drag and drop ***************** //
            let dropArea = document.getElementById("drop-area")
            // Prevent default drag behaviors
            ;
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false)
                document.body.addEventListener(eventName, preventDefaults, false)
            })
            // Highlight drop area when item is dragged over it
            ;
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false)
            });
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false)
            })
            // Handle dropped files
            dropArea.addEventListener('drop', handleDrop, false)

            function preventDefaults(e) {
                e.preventDefault()
                e.stopPropagation()
            }

            function highlight(e) {
                dropArea.classList.add('highlight')
            }

            function unhighlight(e) {
                dropArea.classList.remove('active')
            }

            function handleDrop(e) {
                var dt = e.dataTransfer
                var files = dt.files
                handleFiles(files)
            }
            let uploadProgress = []
            let progressBar = document.getElementById('progress-bar')

            function initializeProgress(numFiles) {
                progressBar.value = 0
                uploadProgress = []
                for (let i = numFiles; i > 0; i--) {
                    uploadProgress.push(0)
                }
            }

            function updateProgress(fileNumber, percent) {
                uploadProgress[fileNumber] = percent
                let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
                console.debug('update', fileNumber, percent, total)
                progressBar.value = total
            }

            function handleFiles(files) {
                files = [...files]
                initializeProgress(files.length)
                files.forEach(uploadFile)
                files.forEach(previewFile)
            }

            function previewFile(file) {
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onloadend = function() {
                    let img = document.createElement('img');
                    img.src = reader.result;

                    let name = document.createElement('p');
                    name.textContent = file.name;

                    let deleteBtn = document.createElement('button');
                    deleteBtn.textContent = 'Delete';
                    deleteBtn.classList.add('btn'); // Add Bootstrap class 'btn'
                    deleteBtn.classList.add('btn-danger'); // Add Bootstrap class 'btn'
                    deleteBtn.addEventListener('click', function() {
                        img.remove();
                        name.remove();
                        deleteBtn.remove();
                    });

                    let container = document.createElement('div');
                    container.appendChild(img);
                    container.appendChild(name);
                    container.appendChild(deleteBtn);

                    document.getElementById('gallery').appendChild(container);
                }
            }

            function uploadFile(file, i) {
                var url = 'https://api.cloudinary.com/v1_1/joezim007/image/upload'
                var xhr = new XMLHttpRequest()
                var formData = new FormData()
                xhr.open('POST', url, true)
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')
                // Update progress (can be used to show progress indicator)
                xhr.upload.addEventListener("progress", function(e) {
                    updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
                })
                xhr.addEventListener('readystatechange', function(e) {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        updateProgress(i, 100) // <- Add this
                    } else if (xhr.readyState == 4 && xhr.status != 200) {
                        // Error. Inform the user
                    }
                })
                formData.append('upload_preset', 'ujpu6gyk')
                formData.append('file', file)
                xhr.send(formData)
            }
        </script>
        <script src="<?php echo $url; ?>/Assets/JS/datepicker_semantic.min.js"></script>
        <script>
            $('#example1').calendar();
            $('#example2').calendar();
        </script>
        <script src="<?php echo $url; ?>/Assets/JS/chart.js"></script>
        <script src="<?php echo $url; ?>/Assets/JS/canvasjs.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const yearSelect = document.getElementById('year-select');
                const chartContainer = document.getElementById('chartContainer');
                let year = new Date().getFullYear();
                let data = [{
                        label: 'January',
                        y: 0
                    },
                    {
                        label: 'February',
                        y: 0
                    },
                    {
                        label: 'March',
                        y: 0
                    },
                    {
                        label: 'April',
                        y: 0
                    },
                    {
                        label: 'May',
                        y: 0
                    },
                    {
                        label: 'June',
                        y: 0
                    },
                    {
                        label: 'July',
                        y: 0
                    },
                    {
                        label: 'August',
                        y: 0
                    },
                    {
                        label: 'September',
                        y: 0
                    },
                    {
                        label: 'October',
                        y: 0
                    },
                    {
                        label: 'November',
                        y: 0
                    },
                    {
                        label: 'December',
                        y: 0
                    },
                ];

                function handleYearChange(event) {
                    year = parseInt(event.target.value);
                    updateData();
                }

                function fetchYearlyData(year) {
                    if (year === 2022) {
                        return [{
                                label: 'January',
                                y: 10
                            },
                            {
                                label: 'February',
                                y: 20
                            },
                            {
                                label: 'March',
                                y: 15
                            },
                            {
                                label: 'April',
                                y: 0
                            },
                            {
                                label: 'May',
                                y: 30
                            },
                            {
                                label: 'June',
                                y: 0
                            },
                            {
                                label: 'July',
                                y: 20
                            },
                        ];
                    } else if (year === 2023) {
                        return [{
                                label: 'January',
                                y: 25
                            },
                            {
                                label: 'February',
                                y: 35
                            },
                            {
                                label: 'March',
                                y: 40
                            },
                            {
                                label: 'April',
                                y: 10
                            },
                            {
                                label: 'May',
                                y: 50
                            },
                            {
                                label: 'November',
                                y: 15
                            },
                        ];
                    }
                    return [];
                }

                function updateData() {
                    const yearlyData = fetchYearlyData(year);
                    const updatedData = data.map(monthData => {
                        const matchingData = yearlyData.find(data => data.label === monthData.label);
                        const y = matchingData ? matchingData.y : 0;
                        return {
                            ...monthData,
                            y
                        };
                    });
                    data = updatedData;
                    renderChart();
                }

                function renderChart() {
                    const chartData = {
                        animationEnabled: true,
                        backgroundColor: "#212529",
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
                        data: [{
                            type: 'line',
                            lineColor: '#ffffff',
                            markerColor: '#ffffff',
                            markerSize: 10,
                            lineThickness: 3,
                            dataPoints: data.map(entry => ({
                                label: entry.label,
                                y: entry.y,
                            })),
                        }, ],
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
                    backgroundColor: "#212529",
                    animationEnabled: true,
                    toolTip: {
                        backgroundColor: "#000000",
                    },
                    title: {
                        text: "Split of Revenue by Product Categories",
                        //   fontWeight: "lighter",
                        fontColor: "white",
                        fontSize: 30,
                    },
                    subtitles: [{
                        text: "Total Revenue :₹64.08K",
                        verticalAlign: "center",
                        fontSize: 17,
                        dockInsidePlotArea: true,
                        fontColor: "#ffffff",
                        fontWeight: "normal"
                    }],
                    data: [{
                        fontColor: "white",
                        type: "doughnut",
                        indexLabel: "{name}: {y}",
                        yValueFormatString: "#,###'%'",
                        dataPoints: [{
                                name: "Acne Controller Serum",
                                y: 49,
                                color: "#ed6ea0"
                            },
                            {
                                name: "Ozonized Purifying Cleanser",
                                y: 8,
                                color: "#ec8c69 "
                            },
                            {
                                name: "Future Texture Toner",
                                y: 18,
                                color: "#f7186a"
                            },
                            {
                                name: "Defense moisturizer",
                                y: 25,
                                color: "#FBB03B"
                            }
                        ],
                        indexLabelFontColor: "white",
                    }]
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
                    labels: ['Acne Controller Serum', 'Ozonized Purifying Cleanser', 'Future Texture Toner',
                        'Defense moisturizer'
                    ],
                    datasets: [{
                        data: [12, 30, 20, 17],
                        backgroundColor: ['#ed6ea0', '#ec8c69', '#f7186a', '#FBB03B'],
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var options = {
                    backgroundColor: "#212529",
                    title: {
                        text: "Sales",
                        fontColor: "white",
                    },
                    axisX: {
                        title: "Products",
                        titleFontColor: "white",
                        labelFontColor: "white",
                    },
                    axisY: {
                        title: "Sales Amount",
                        titleFontColor: "white",
                        labelFontColor: "white",
                    },
                    data: [{
                        type: "column",
                        dataPoints: [{
                                label: "Acne Controller Serum",
                                y: 5000
                            },
                            {
                                label: "Ozonized Purifying Cleanser",
                                y: 25000
                            },
                            {
                                label: "Future Texture Toner",
                                y: 10000
                            },
                            {
                                label: "Defense moisturizer",
                                y: 10000
                            }
                        ],
                    }]
                };
                var chart = new CanvasJS.Chart("chartContainer_loyalty", options);
                chart.render();
            });
        </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>

        </html>