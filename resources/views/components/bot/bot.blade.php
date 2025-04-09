<div class="mt-4 w-[350px] border rounded shadow p-4 flex flex-col">
    <h3 class="text-lg font-bold mb-2">Ask about this news</h3>

    <textarea 
        id="userQuestion" 
        class="w-full border rounded p-2 resize-none" 
        rows="3" 
        placeholder="Type your question..."
    ></textarea>
    
    <button 
        onclick="sendQuestion()" 
        class="mt-2 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition-colors"
    >
        Ask our bot
    </button>

    <div 
        id="botResponse" 
        class="mt-4 text-gray-800 break-words max-h-[300px] overflow-y-auto leading-relaxed w-full bg-gray-100 p-3 rounded"
    ></div>
</div>

<script>
    async function sendQuestion() {
        const question = document.getElementById('userQuestion').value.trim();
        const responseBox = document.getElementById('botResponse');
        
        if (!question) {
            responseBox.innerHTML = '<p class="text-red-500">Please enter a question</p>';
            return;
        }

        responseBox.innerHTML = '<div class="flex justify-center py-4"><div class="animate-spin rounded-full h-6 w-6 border-t-2 border-b-2 border-blue-500"></div></div>';

        try {
            const res = await fetch("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    contents: [{
                        parts: [{ 
                            text: `The user is reading a news article. They ask: "${question}". 
                                  Provide a very concise answer in 2-3 short sentences max. 
                                  Keep response under 120 words.`
                        }]
                    }]
                })
            });

            const data = await res.json();
            let reply = data.candidates?.[0]?.content?.parts?.[0]?.text || "Sorry, I couldn't generate a response.";
            
            // Format the response with proper line breaks and constrained width
            reply = `<div class="space-y-2 w-full">${
                reply.split('\n')
                    .filter(p => p.trim())
                    .map(p => `<p class="w-full">${p}</p>`)
                    .join('')
            }</div>`;
            
            responseBox.innerHTML = reply;
            
        } catch (error) {
            console.error(error);
            responseBox.innerHTML = '<p class="text-red-500">Error contacting the assistant. Please try again.</p>';
        }
    }
</script>
