const express = require("express");
const app = express();

app.get("/",async (req, res) => {
    res.attachment("data.jpg");
    console.log(res.get('Content-Disposition'));
    res.send("Success");
});

app.listen(3000, (err) => {
    if(!err){
        console.log("Server Running on port 3000");
    }else{
        console.log("Server Error "+err);
    }    
})