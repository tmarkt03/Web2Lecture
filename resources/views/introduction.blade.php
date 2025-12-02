<x-mainpage>
  <h1>Introduction page</h1>
    <canvas id="chart" width="400" height="200"></canvas>
    <script type="module" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    (async function() {
  const data = [
    { year: 2010, count: 10 },
    { year: 2011, count: 20 },
    { year: 2012, count: 15 },
    { year: 2013, count: 25 },
    { year: 2014, count: 22 },
    { year: 2015, count: 30 },
    { year: 2016, count: 28 },
  ];

  new Chart(
    document.getElementById('acquisitions'),
    {
      type: 'bar',
      data: {
        labels: data.map(row => row.year),
        datasets: [
          {
            label: 'Acquisitions by year',
            data: data.map(row => row.count)
          }
        ]
      }
    }
  );
})();




    </script>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  Nunc pellentesque posuere nunc, at laoreet augue. Donec
  ultricies eu mi sit amet dictum. Maecenas ut posuere
</x-mainpage>
