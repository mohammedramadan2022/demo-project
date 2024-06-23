window.readURL = function(fileName) {
    if (fileName.files && fileName.files[0]) {
        const reader = new FileReader();
        reader.onload = (e) => {
            $('#viewImage').attr('src', e.target.result).width(300).height(300);
        };
        reader.readAsDataURL(fileName.files[0]);
    }
}

customElements.define("foo-element",
    class extends HTMLElement {
        constructor() {
            super();

            const pElem = document.createElement('p');
            pElem.textContent = this.getAttribute('text');

            const shadowRoot = this.attachShadow({mode: 'open'});
            shadowRoot.appendChild(pElem);
        }
    }
);

function makeid(length) {
    let result           = '';
    let characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let charactersLength = characters.length;
    for (let i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function getSwitchRender(type, id) {
    if(type === 'false')
    {
        return `
                <div id="checkbox-${id}">
                    <input
                        type="checkbox"
                        class="form-control form-data"
                        onclick="isChecked('null', '${id}')"
                        id="active-id-${id}"
                        checked="checked"
                        name="status"
                        data-switchery="true"
                        style="display: none;">
                        <span
                            class="switchery switchery-default"
                            style="background-color: rgb(95, 99, 74); border-color: rgb(95, 99, 74); box-shadow: rgb(95, 99, 74) 0px 0px 0px 14.5px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;">
                            <small style="left: 26px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small>
                        </span>
                </div>
            `;
    }
    else
    {
        return `
                <div id="checkbox-${id}">
                    <label>
                        <input
                            type="checkbox"
                            class="form-control form-data"
                            onclick="isChecked('checked', '${id}')"
                            id="active-id-${id}"
                            name="status"
                            data-switchery="true"
                            style="display: none;">
                            <span class="switchery switchery-default" style="background-color: rgb(255, 255, 255); border-color: rgb(223, 223, 223); box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </label>
                </div>
            `;
    }
}

let renderStatus = function(data, type, item) {
    let finalStatue = ``;

    if(item.status)
    {
        finalStatue = `
            <span class="switchery switchery-default" style="background-color: rgb(95, 99, 74); border-color: rgb(95, 99, 74); box-shadow: rgb(95, 99, 74) 0px 0px 0px 16.5px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small></span>
        `;
    }
    else
    {
        finalStatue = `
            <span class="switchery switchery-default" style="background-color: rgb(255, 255, 255); border-color: rgb(223, 223, 223); box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
        `;
    }
    return `
        <div id="checkbox-${item.id}">
            <label>
                <input
                    type="checkbox"
                    onclick="isChecked('${item.status ? 'checked' : 'null'}', '${item.id}')"
                    id="active-id-${item.id}"
                    ${item.status ? 'checked' : ''}
                    value="${item.id}"
                    name="status"
                    data-switchery="true"
                    style="display: none;"
                    class="form-control switchery form-data">
                    ${finalStatue}
            </label>
        </div>
    `;
};
