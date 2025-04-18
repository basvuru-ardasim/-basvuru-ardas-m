<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başvuru Ardaşım</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Başvuru Ardaşım</h1>
        <button id="loginBtn">Giriş Yap</button>
    </header>

    <main>
        <section id="assistant">
            <h2>Konuşan Asistan</h2>
            <button onclick="sorAsistana()">Asistana Sor</button>
            <div id="asistanCevap"></div>
        </section>

        <section id="jobList">
            <h2>İş İlanları</h2>
            <ul id="jobs"></ul>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>