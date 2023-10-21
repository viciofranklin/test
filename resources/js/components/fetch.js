export const fetchBeer = async () => {
    try 
    {
        const loadMoreButton = document.getElementById('loadmore');

        const beersContainer = document.querySelector('.beers');
        if(!beersContainer) return;

        let beers = '';

        const response = await axios.get(`/api/beer?page=${parseInt(loadMoreButton.getAttribute('data-page'))}`);
        response.data.map(beer => {
            beers += `
                <div class="col-sm-4">
                    <div class="card beer">
                        <img src="${beer.image_url}" class="card-img-top" alt="${beer.name}">
                        <div class="card-body">
                            <h5 class="card-title">${beer.name}</h5>
                            <p class="card-text">${beer.description}</p>
                        </div>
                    </div>
                </div>
            `;});

        beersContainer.querySelector('.row').innerHTML += beers;

        
        loadMoreButton.setAttribute('data-page', (parseInt(loadMoreButton.getAttribute('data-page')) + 1) );

    } 
    catch (error) 
    {
        alert('An error occurred during fetch Beers');
    }
}