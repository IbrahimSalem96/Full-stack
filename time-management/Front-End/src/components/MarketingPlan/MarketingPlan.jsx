import React, { useEffect, useRef, useState } from 'react';
import './MarketingPlan';
import Chart from 'chart.js/auto';
import axios from 'axios';

export default function MarketingPlan() {
    const chartRef = useRef(null);
    const [dataChart, setDataChart] = useState();

    const fetchData = async () => {
        try {
            const response = await axios.get(`http://localhost:8000/api/chart`);
            setDataChart(response.data);
            createChart(response.data.arrCount, response.data.arrTitle);
        } catch (error) {
            console.log('Error Fetch Data ' + error);
        }
    };

    const createChart = (chartCount, chartTitle) => {
        const config = {
            type: 'bar',
            data: {
                labels: chartTitle,
                datasets: [
                    {
                        axis: 'y',
                        label: ' ',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)',
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)',
                        ],
                        borderWidth: 1,
                    },
                    {
                        axis: 'x',
                        data: chartCount,
                        label: 'Marketing Plan',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)',
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)',
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                indexAxis: 'y',
            },
        };

        if (chartRef.current) {
            if (chartRef.current.chart) {
                chartRef.current.chart.destroy();
            }
            chartRef.current.chart = new Chart(chartRef.current, config);
        }
    };

    useEffect(() => {
        fetchData();
    }, []);

    return (
        <>
            <h1>Marketing Plan</h1>
            <div className="chart" style={{ width: '800px', height: '800px' }}>
                <canvas ref={chartRef}></canvas>
            </div>
        </>
    );
}
