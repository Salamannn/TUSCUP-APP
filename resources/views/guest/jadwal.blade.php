@extends('guest.layouts.app')

@section('title', 'Jadwal')

@section('content')
    <div class="container" style="margin-bottom: 100px">
        <div class="mt-5" style="width: 100%; color: #AA0000; font-size: 5vw; font-family: Anton SC; font-weight: 400;">
            JADWAL
        </div>
        <div class="d-flex gap-3">
            <select id="category-list" class="form-select" aria-label="Pilih Kategori">
            </select>
            <select id="schedule-date-list" class="form-select" aria-label="Pilih Tanggal">
            </select>
        </div>
        <div id="schedule-list" class="d-flex flex-column gap-5" style="margin-top: 84px;">
        </div>
    </div>
    <script>
        const schedule = [
            {
                startDate: new Date("2024-07-09T09:00:00"),
                teamOne: "PUTI",
                teamTwo: "KMHS",
                currentScore: {
                    teamOne: [21, 18],
                    teamTwo: [22, 20]
                },
                currentRound: "Penyisihan",
                category: "Badminton"
            },
            {
                startDate: new Date("2024-07-09T09:30:00"),
                teamOne: "SSC",
                teamTwo: "St Staff",
                currentScore: {
                    teamOne: [60],
                    teamTwo: [40]
                },
                currentRound: "Penyisihan",
                category: "Basket"
            },
            {
                startDate: new Date("2024-07-09T10:00:00"),
                teamOne: "PUTI",
                teamTwo: "Akademik",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Futsal"
            },
            {
                startDate: new Date("2024-07-10T09:00:00"),
                teamOne: "PUTI",
                teamTwo: "KMHS",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Badminton"
            },
            {
                startDate: new Date("2024-07-10T09:30:00"),
                teamOne: "SC",
                teamTwo: "St Staff",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Badminton"
            },
            {
                startDate: new Date("2024-07-10T10:00:00"),
                teamOne: "PUTI",
                teamTwo: "Akademik",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Badminton"
            },
            {
                startDate: new Date("2024-07-11T09:00:00"),
                teamOne: "PUTI",
                teamTwo: "KMHS",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "MLBB"
            },
            {
                startDate: new Date("2024-07-11T09:30:00"),
                teamOne: "SC",
                teamTwo: "St Staff",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Catur"
            },
            {
                startDate: new Date("2024-07-11T10:00:00"),
                teamOne: "PUTI",
                teamTwo: "Akademik",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Estafet"
            },
            {
                startDate: new Date("2024-07-12T09:00:00"),
                teamOne: "PUTI",
                teamTwo: "Akademik",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Open Mic"
            },
            {
                startDate: new Date("2024-07-13T09:00:00"),
                teamOne: "PUTI",
                teamTwo: "Akademik",
                currentScore: {
                    teamOne: [],
                    teamTwo: []
                },
                currentRound: "Penyisihan",
                category: "Open Mic"
            }
        ]

        // VARIABLES
        const ALL_CATEGORIES = "Semua Kategori"
        const ALL_DATES = "Semua Tanggal"

        const allDatesFromSchedule = []
        const allCategoriesFromSchedule = []

        schedule.forEach(item => {
            if(!allDatesFromSchedule.includes(item.startDate.toLocaleDateString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            }).toString())) {
                allDatesFromSchedule.push(item.startDate.toLocaleDateString('id-ID', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                }).toString())
            }
            if (!allCategoriesFromSchedule.includes(item.category)) {
                allCategoriesFromSchedule.push(item.category)
            }
        })

        function transformScheduleData(originalData) {
            // Create a map to group schedules by date
            const groupedSchedules = new Map();

            // Iterate through the original data
            originalData.forEach(schedule => {
                const date = schedule.startDate.toDateString();
                
                if (!groupedSchedules.has(date)) {
                    const tempDate = new Date(date)
                    const groupedDate = tempDate.setHours(0, 0, 0, 0)
                    groupedSchedules.set(date, {
                        groupDate: new Date(groupedDate),
                        groupDateString: formatDateString(schedule.startDate),
                        scheduleList: []
                    });
                }
                
                groupedSchedules.get(date).scheduleList.push(schedule);
            });

            // Convert the map to an array and sort by date
            return Array.from(groupedSchedules.values()).sort((a, b) => a.groupDate - b.groupDate);
        }

        // Helper function to format the date string
        function formatDateString(date) {
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            
            return `${days[date.getDay()]}, ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;
        }

        // transforming data to render epic view
        let transformedData;
        
        // handling filter data
        const url = new URL(window.location.href)
        const dateParams = url.searchParams.get("date")
        const categoryParams = url.searchParams.get("category")
        let filterByDate = dateParams ? new Date(dateParams) : null
        let filterByCategory = categoryParams || null

        // handling if filter all data
        if (dateParams === ALL_DATES) filterByDate = null
        if (categoryParams === ALL_CATEGORIES) filterByCategory = null

        if (filterByDate || filterByCategory) {
            let temp = schedule;

            if (filterByDate) {
                temp = schedule.filter((item) => item.startDate.toDateString().toString() === filterByDate.toDateString().toString())
            }

            if (filterByCategory) {
                temp = temp.filter((item) => item.category === filterByCategory)
            }
            
            transformedData = transformScheduleData(temp);
        } else {
            transformedData = transformScheduleData(schedule);
        }
    
        // fill the dropdown data
        allDatesFromSchedule.unshift(ALL_DATES)
        allCategoriesFromSchedule.unshift(ALL_CATEGORIES)
        document.getElementById("schedule-date-list").innerHTML = allDatesFromSchedule.map((item) => `<option value="${item}" ${item === dateParams ? "selected" : ""}>${item}</option>`).join("")
        document.getElementById("category-list").innerHTML = allCategoriesFromSchedule.map((item) => `<option value="${item}" ${item === categoryParams ? "selected" : ""}>${item}</option>`).join("")

        document.getElementById('schedule-date-list').addEventListener('change', function() {
            const currentURL = new URL(window.location.href)
            currentURL.searchParams.set("date", this.value)
            window.location.href = currentURL
        });
        document.getElementById('category-list').addEventListener('change', function() {
            const currentURL = new URL(window.location.href)
            currentURL.searchParams.set("category", this.value)
            window.location.href = currentURL
        });

        // render schedule list row
        function renderSchedules(scheduleData) {
            const container = document.getElementById('schedule-list');
            
            scheduleData.forEach(group => {
                const groupElement = document.createElement('div');
                
                groupElement.innerHTML = `
                <h3 style="width: 100%; color: #292929; font-size: 30px; font-family: Anton SC; font-weight: 400;">${group.groupDateString}</h3>
                <div class="d-flex flex-column gap-2" style="margin-top: 36px;">
                    ${group.scheduleList.map(schedule => `
                    <div style="font-family: Poppins" class="d-flex gap-5 justify-content-between px-3 border border-1 rounded">
                        <div class="d-flex gap-5 p-2">
                        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 60px">
                            <p style="font-size: 14px" class="m-0">Jam</p>
                            <p style="font-size: 20px; color: #AA0000; font-weight: 600;" class="m-0">${formatTime(schedule.startDate)}</p>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center" style="width: 120px">
                            <p style="font-size: 20px;" class="m-0">${schedule.teamOne}</p>
                            <p style="font-size: 20px; color: #979797;" class="m-0">${schedule.teamTwo}</p>
                        </div>
                        <div class="vr"></div>
                        <div class="d-flex gap-4">
                            ${renderScores(schedule.currentScore)}
                        </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <p style="font-size: 14px;" class="m-0 text-end">${schedule.currentRound}</p>
                        <p style="font-size: 20px; color: #AA0000; font-weight: 600;" class="m-0 text-end">${schedule.category}</p>
                        </div>
                    </div>
                    `).join('')}
                </div>
                `;
                
                container.appendChild(groupElement);
            });
        }

        function renderScores(scores) {
            if (!scores || (!scores.teamOne.length && !scores.teamTwo.length)) {
                return `
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p style="font-size: 20px;" class="m-0">-</p>
                    <p style="font-size: 20px; color: #979797;" class="m-0">-</p>
                </div>
                `;
            }

            const maxScores = Math.max(scores.teamOne.length, scores.teamTwo.length);
            let scoreHTML = '';

            for (let i = 0; i < maxScores; i++) {
                scoreHTML += `
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <p style="font-size: 20px;" class="m-0">${scores.teamOne[i] || '-'}</p>
                    <p style="font-size: 20px; color: #979797;" class="m-0">${scores.teamTwo[i] || '-'}</p>
                </div>
                `;
            }

            return scoreHTML;
        }

        function formatTime(date) {
            return new Date(date).toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });
        }

        renderSchedules(transformedData);
        
    </script>
@endsection
