const api_url = "http://192.168.46.152:8100/api/today";
// Defining async function
async function getapi(url) {

    // Storing response
    const response = await fetch(url);

    // Storing data in form of JSON
    let data = await response.json();
    if (response) {
        hideloader();
    }
    show(data);
}
getapi(api_url);

// Function to hide the loader
function hideloader() {

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
    const pcu = data.pt_pcu;
    const admit = data.admit_new;
    const dchtoday = data.dchtoday;
    const admitcount = data.admitcount;
    const deathInOpd = data.opd.death_opd;
    const deathInIpd = data.opd.death_ipd;
    const fromLab = data.form_lab;


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
    document.getElementById("ptm_ipd_hn").innerText = ipd[0].ptm_ipd_hn;
    document.getElementById("ptm_ipd_an").innerText = ipd[0].ptm_ipd_an;
    document.getElementById("pt_ipd_today").innerText = ipd[0].pt_ipd_today;

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
    // pcu
    document.getElementById("ptm_pcu_hn").innerText = pcu[0].ptm_pcu_hn;
    document.getElementById("ptm_pcu_vn").innerText = pcu[0].ptm_pcu_vn;
    document.getElementById("pt_pcu_today").innerText = pcu[0].pt_pcu_today;
    // IPT
    document.getElementById("admit_new").innerText = admit[0].admittoday;
    document.getElementById("dchtoday").innerText = dchtoday[0].dchtoday;
    document.getElementById("admitcount-total").innerText = admitcount[0].total_admit;
    // top 10 diag in opd
    document.getElementById("top_diag_opd").innerHTML = top_diag(data.top_diag_opd);
    // top 10 diag in ipd
    document.getElementById("top_diag_ipd").innerHTML = top_diag(data.top_diag_ipd);
    // top 5 diag in death on OPD
    document.getElementById("death_opd").innerHTML = death(deathInOpd);
    document.getElementById("death_ipd").innerHTML = death(deathInIpd);
    // from lab count in today
    document.getElementById("form_lab_today").innerText = fromLab[0].form_lab_today;
}


// show data top 10 diag in opt and ipd
function top_diag(data) {
    let table_diag = `
    <thead>
            <tr>
            <th>ICD10/Diag</th>              
            <th class="text-right">รวม</th>
        </tr>
    </thead>
    <tbody>
    `;
    for (let r of data) {
        table_diag += `
       <tr>
            <td>
                <h4><i class="la la-hashtag"></i><a href="project-view.html"> ${r.pdx}</a>
                </h4>
                <small class="block text-ellipsis">
                    <h0 class="text-dark"><i class="la la-caret-square-right"></i> ${r.diag_name}</h0>

                </small>
            </td>
            <td class="text-right">
                <h3><i class="la la-user-friends"></i> ${r.count_person}</h3>
            </td>
        </tr>
       `;
    }
    table_diag += '<tbody>';
    return table_diag;
}

function death(data) {
    let tableDeathOpd = `
    <thead>
        <tr>
            <th>ICD10</th>
            <th>diagname</th>
            <th>รวม</th>
        </tr>
    </thead>
    <tbody>
    `;
    for (let r of data) {
        tableDeathOpd += `
        <tr>
        <td>
            <h4><i class="la la-hashtag"></i><a href="project-view.html"> ${r.death_diag}</a>
            </h4>
        </td>
        <td>
            <div>
                <p>${r.diag_name}</p>
            </div>
        </td>
        <td>
            <div>
                <h3><i class="la la-book-dead"></i>
                ${r.sum_death}</h3>
            </div>
        </td>
    </tr>
       `;
    }
    tableDeathOpd += '<tbody>';
    return tableDeathOpd;
}


// Loader

// function loader() {
//     $('#loader').delay(100).fadeOut('slow');
//     $('#loader-wrapper').delay(0).fadeOut('slow');
// }