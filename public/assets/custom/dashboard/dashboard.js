const api_url = "http://localhost:8000/api/today";
// Defining async function
async function getapi(url) {

    // Storing response
    const response = await fetch(url);

    // Storing data in form of JSON
    var data = await response.json();
    console.log(data);
    if (response) {
        hideloader();
    }
    show(data);
}
getapi(api_url);

// Function to hide the loader
function hideloader() {
    console.log("success");
}

function show(data) {
    const visit = data.pt_visit;
    const opd = data.pt_opd;
    const er = data.pt_er;
    const dent = data.pt_dent;
    const xray = data.pt_xray;
    const ttm = data.pt_ttm;
    const phy = data.pt_phy;
    const ipd = data.pt_ipd;
    // visit
    document.getElementById("ptm_visit_hn").innerText = visit[0].ptm_visit_hn;
    document.getElementById("ptm_visit_vn").innerText = visit[0].ptm_visit_vn;
    document.getElementById("pt_visit_today").innerText = visit[0].pt_visit_today;
    // opd
    document.getElementById("ptm_opd_hn").innerText = opd[0].ptm_opd_hn;
    document.getElementById("ptm_opd_vn").innerText = opd[0].ptm_opd_vn;
    document.getElementById("pt_opd_today").innerText = opd[0].pt_opd_today;
    // phy           
    document.getElementById("ptm_phy_hn").innerText = phy[0].ptm_phy_hn;
    document.getElementById("ptm_phy_vn").innerText = phy[0].ptm_phy_vn;
    document.getElementById("pt_phy_today").innerText = phy[0].pt_phy_today;
    // dent 
    document.getElementById("ptm_dent_hn").innerText = dent[0].ptm_dent_hn;
    document.getElementById("ptm_dent_vn").innerText = dent[0].ptm_dent_vn;
    document.getElementById("pt_dent_today").innerText = dent[0].pt_dent_today;
    // ipd 
    // document.getElementById("ptm_ipd_hn").innerText = ipd[0].ptm_ipd_hn;
    // document.getElementById("ptm_ipd_an").innerText = ipd[0].ptm_ipd_an;
    // document.getElementById("pt_ipd_today").innerText = ipd[0].pt_ipd_today;

    // ttm
    document.getElementById("ptm_ttm_hn").innerText = ttm[0].ptm_ttm_hn;
    document.getElementById("ptm_ttm_vn").innerText = ttm[0].ptm_ttm_vn;
    document.getElementById("pt_ttm_today").innerText = ttm[0].pt_ttm_today;

    // er
    document.getElementById("ptm_er_hn").innerText = er[0].ptm_er_hn;
    document.getElementById("ptm_er_vn").innerText = er[0].ptm_er_vn;
    document.getElementById("pt_er_today").innerText = er[0].pt_er_today;
    // x-ray
    document.getElementById("ptm_xray_hn").innerText = xray[0].ptm_xray_hn;
    document.getElementById("ptm_xray_vn").innerText = xray[0].ptm_xray_vn;
    document.getElementById("pt_xray_today").innerText = xray[0].pt_xray_today;
}