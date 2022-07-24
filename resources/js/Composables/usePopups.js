/** Functions */

export function usePopups() {

    const open = (popupClass) => {
        let target = Array.from(document.getElementsByClassName('popup'))
                          .filter(node => node.attributes['data-active'].value == popupClass)[0]
        target.classList.toggle('active')
        document.querySelector('body').style.overflowY = 'hidden'
        document.querySelector('body').classList.add('opened-popup')
    }

    const close = (popupClass) => {
        let target = Array.from(document.getElementsByClassName('popup'))
                          .filter(node => node.attributes['data-active'].value == popupClass)[0]
        target.classList.toggle('active')
        document.querySelector('body').style.overflowY = 'auto'
        document.querySelector('body').classList.remove('opened-popup')
    }

    return { open, close }
}