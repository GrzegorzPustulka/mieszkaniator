function viewOffer(offerId) {
    const data = {
        id: offerId
    };

    fetch('/getOffer', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Offer not found, status: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            localStorage.setItem('offerData', JSON.stringify(data));
            window.location = `/offer`;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
