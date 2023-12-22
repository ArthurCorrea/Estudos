function SeuNome( {setNome} ) {

    return(
        <div>
            <p>Digite seu nome:</p>
            <input type="text" name="name" id="name" 
            placeholder="Nome"
            onChange={(e) => setNome(e.target.value)}/>

        </div>
    )

}

export default SeuNome