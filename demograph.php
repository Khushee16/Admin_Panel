<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Graph</title>
    
</head>
<body>
    <div>
        <div class="d-flex justify-content-end text center align-items-center mb-2">
            <label for="year-select" class="pe-4 fw-bold">Select Year:</label>
            <select id="year-select" class="bg-light border-black border-dark-subtle">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
        </div>
        <div id="chartContainer"></div>
    </div>

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
                backgroundColor: "#000000",
                title: {
                    text: `Monthly Values of Year ${year}`,
                    fontColor: '#ffffff'
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
</body>
</html>
