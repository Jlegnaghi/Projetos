document.addEventListener('DOMContentLoaded', async () => {
    try {
        const response = await fetch('https://seuDominio.com/stats'); // Substitua pelo seu domínio
        const data = await response.json();
        console.log(data); // Exibir no console para verificação

        // Implemente a lógica para exibir as estatísticas na seção 'player-stats'.
        const playerStatsSection = document.getElementById('player-stats');
        
        if (data && data.kills && data.deaths) {
            playerStatsSection.innerHTML = `
                <h2>Estatísticas do Jogador</h2>
                <p>Kills: ${data.kills}</p>
                <p>Deaths: ${data.deaths}</p>
            `;
        } else {
            playerStatsSection.innerHTML = '<p>Não foi possível recuperar as estatísticas.</p>';
        }
    } catch (error) {
        console.error('Error fetching data:', error);
    }
});