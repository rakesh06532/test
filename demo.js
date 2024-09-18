function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

// Use async and await to handle the asynchronous operation
async function performTask() {
    console.log('Task started');
    
    // Wait for the delay to complete
    await delay(2000); // Waits for 2 seconds
    
    console.log('Task completed');
}

// Call the async function
performTask();

async function fetchData() {
    try {
        const response = await fetch('https://api.restful-api.dev/objects');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
         return data;
    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
    }
}

fetchData();
