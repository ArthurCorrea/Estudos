import { View, Text, TouchableOpacity, FlatList } from 'react-native'
import { Header } from '../../components/Header'

const data = [
    {
        id: '1',
        name: 'Listas',
        routeName: 'Lists',
    },
    {
        id: '2',
        name: 'Ícones',
        routeName: 'Icons',
    },
]

export const Home = () => {
    return(
        <View style={{ paddingVertical: 10 }}>
            <Header color={'#005551'}/>
            <View>
                <FlatList 
                    data={data} 
                    renderItem={({ item, index }) => (
                        <View style={{ width: '80%', height: 40, borderWidth: 1, marginVertical: 10 }}>
                            <Text> {item.name} </Text>
                        </View>
                    )} 
                    keyExtractor={item => item.id}/>
            </View>
        </View>
    )
}