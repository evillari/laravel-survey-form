var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',

    // The data for our dataset
    data: {
        labels: ['Skill1', 'Skill2', 'Skill3', 'Skill4', 'Skill5', 'Skill6', 'Skill7'],
        datasets: [{
            label: 'Survey',
            data: [0, 10, 5, 2, 20, 30, 45],
            backgroundColor: [
                'red','blue', 'green','yellow','orange' , 'black', 'cyan'
            ]
        }]
    },

    // Configuration options go here
    options: {
        title:{
            display: true,
            text: 'Survey Results',
            fontSize: 18,
            position: 'top',
            fontColor: 'black'
        }
    }
});




