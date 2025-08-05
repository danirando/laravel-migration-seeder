import "./bootstrap";
import "../css/app.css";

function aggiornaOrologio() {
    const adesso = new Date();
    const opzioni = {
        year: "numeric",
        month: "2-digit",
        day: "2-digit",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    };
    document.getElementById("orologio").innerText = adesso.toLocaleString(
        "it-IT",
        opzioni
    );
}

setInterval(aggiornaOrologio, 1000); // Aggiorna ogni secondo
aggiornaOrologio(); // Chiama subito all'inizio
