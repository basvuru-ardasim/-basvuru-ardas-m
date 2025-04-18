function sorAsistana() {
    const cevap = "Merhaba! Size nasıl yardımcı olabilirim?";
    document.getElementById("asistanCevap").innerText = cevap;
}

// API'den iş ilanlarını getir
fetch("http://localhost:8000/api/jobs")
    .then(response => response.json())
    .then(data => {
        const jobsList = document.getElementById("jobs");
        data.forEach(job => {
            const li = document.createElement("li");
            li.textContent = job.title + " - " + job.company;
            jobsList.appendChild(li);
        });
    })
    .catch(error => {
        console.error("İş ilanları alınamadı:", error);
    });