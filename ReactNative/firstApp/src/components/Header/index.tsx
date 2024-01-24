import { View, Text, Button } from "react-native"
import { styles } from "./styles/styles"

export const Header = ({ color }: any) => {
    return (
        <View style={[styles.container, { backgroundColor: color}]}>

            <Text style={styles.title}>
                Olá! Fazendo testes com elementos nativos
            </Text>

        </View>
    )
}