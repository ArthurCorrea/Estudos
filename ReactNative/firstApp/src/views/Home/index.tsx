import { View, Text, Button } from 'react-native'
import { Header } from '../../components/Header'
import { Lists } from '../Lists'

export const Home = () => {
    return(
        <View style={{  }}>
            <Header color={'#005551'}/>
            <Lists />
        </View>
    )
}